# Last updated: 20/05/2025, 19:43:02
class Solution:
    def calPoints(self, operations: List[str]) -> int:
        rec = []
        for o in operations:
            if o == 'C':
                rec.pop()
            elif o == 'D':
                rec.append(rec[-1]*2)
            elif o == '+':
                rec.append(rec[-1]+rec[-2])
            else:
                rec.append(int(o))

        return sum(rec)