# Last updated: 19/05/2025, 20:09:39
class Solution:
    def heightChecker(self, heights: List[int]) -> int:
        exp = sorted(heights)
        res = 0
        for i, j in zip(heights, exp):
            if i != j:
                res += 1

        return res