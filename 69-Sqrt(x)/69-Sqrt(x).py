# Last updated: 26/04/2025, 14:19:42
class Solution:
    def mySqrt(self, x: int) -> int:
        if x == 0 or x == 1:
            return x
            
        low = 0
        high = x // 2
        root = 0

        while low <= high:
            mid = low + ((high - low) // 2)
            square = mid * mid

            if square == x:
                return mid
            
            if square < x:
                root = max(root, mid)
                low = mid + 1
            else:
                high = mid - 1
        
        return root