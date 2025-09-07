# Last updated: 06/09/2025, 18:12:24
class Solution:
    def sumZero(self, n: int) -> List[int]:
        if n == 0: return [0]
        (pairs, odd) = divmod(n, 2)
        res = list()
        curNumber = 1
        for i in range(0, pairs):
            res.append(curNumber)
            res.append(curNumber * (-1))
            curNumber = curNumber + 1
        if odd: res.append(0)

        return res