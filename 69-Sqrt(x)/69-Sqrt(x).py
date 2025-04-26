# Last updated: 26/04/2025, 14:09:48
class Solution:
    def mySqrt(self, x: int) -> int:
        i = 0

        while x >= i * i:
            i += 1

        return i - 1
