# Last updated: 07/05/2025, 11:53:40
class Solution:
    def addToArrayForm(self, num: List[int], k: int) -> List[int]:
        res = []
        rest = k
        plus = 0
        for i in range(len(num) - 1, -1, -1):
            rest, cur = divmod(rest, 10)
            plus, new_item = divmod(cur + num[i] + plus, 10)
            res.insert(0, new_item)
        if rest > 0 or plus > 0:
            rest = rest + plus
            while rest > 0:
                rest, cur = divmod(rest, 10)
                res.insert(0, cur)
        
        return res