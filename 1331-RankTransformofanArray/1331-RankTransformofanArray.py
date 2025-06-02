# Last updated: 01/06/2025, 20:38:01
class Solution:
    def arrayRankTransform(self, arr: List[int]) -> List[int]:
        num_to_rank = {}
        sorted_arr = sorted(set(arr))

        for i in range(len(sorted_arr)):
            num_to_rank[sorted_arr[i]] = i+1
        return [num_to_rank[i] for i in arr]
        