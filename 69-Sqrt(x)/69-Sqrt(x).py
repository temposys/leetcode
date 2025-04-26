# Last updated: 26/04/2025, 14:23:50
class Solution:
    def mySqrt(self, x: int) -> int:
        if x == 0 or x == 1:
            return x
            
        low = 2
        high = x // 2
        root = 0

        while low <= high:
            mid = low + ((high - low) // 2)

            if mid == x // mid:
                return mid
            
            if mid < x // mid:
                low = mid + 1
            else:
                high = mid - 1
        
        return high