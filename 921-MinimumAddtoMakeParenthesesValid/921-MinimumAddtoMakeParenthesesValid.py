# Last updated: 28/04/2025, 15:19:25
class Solution:
    def minAddToMakeValid(self, s: str) -> int:
        openS = 0
        closeS = 0
        for i in s:
            if i == '(': 
                openS += 1
            else:
                if openS > 0: openS -= 1
                else: closeS += 1

        return openS + closeS