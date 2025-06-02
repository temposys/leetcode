# Last updated: 01/06/2025, 20:34:54
class Solution:
    def arrayRankTransform(self, arr: List[int]) -> List[int]:
        num_to_rank = {}
        sorted_arr = sorted(arr)
        rank = 1
        for i in range(len(sorted_arr)):
            if i > 0 and sorted_arr[i] > sorted_arr[i - 1]:
                rank += 1
            num_to_rank[sorted_arr[i]] = rank
        return [num_to_rank[i] for i in arr]
        