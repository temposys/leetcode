# Last updated: 27/04/2025, 09:28:42
class Solution:
    def maxOperations(self, nums: List[int], k: int) -> int:
        operation = 0
        # start = 0
        # end = len(nums) - 1
        arrMap = {}

        for i, n in enumerate(nums):
            if n > k:
                continue
            rest = k - n
            if rest in arrMap and arrMap[rest] > 0:
                arrMap[rest] -= 1
                operation += 1
            else:
                arrMap[n] = arrMap[n] + 1 if n in arrMap else 1


        return operation