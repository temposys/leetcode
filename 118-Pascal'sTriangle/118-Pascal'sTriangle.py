# Last updated: 08/05/2025, 18:12:19
class Solution:
    def generate(self, numRows: int) -> List[List[int]]:
        l = 1
        res = []
        while l <= numRows:
            row = []
            for i in range(l):
                if i == 0 or i == l-1:
                    row.append(1)
                else:
                    row.append(res[l-2][i-1] + res[l-2][i])
            res.append(row)
            l += 1
        
        return res