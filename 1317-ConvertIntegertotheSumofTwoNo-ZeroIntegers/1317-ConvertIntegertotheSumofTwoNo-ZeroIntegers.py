# Last updated: 07/09/2025, 17:18:00
class Solution:
    def getNoZeroIntegers(self, n: int) -> List[int]:
        num = 0
        rest = 0
        while ('0' in str(num) or '0' in str(rest)):
            num = randint(1,n-1)
            rest = n-num
        
        return [rest, num] if num > rest else [num, rest]