# Last updated: 28/04/2025, 12:40:04
class Solution:
    def maxScore(self, nums1: List[int], nums2: List[int], k: int) -> int:
        res = 0
        prefixSum = 0
        h = []

        for n1, n2 in sorted(zip(nums1, nums2), key=itemgetter(1), reverse=True):
            prefixSum += n1
            heapq.heappush(h, n1)
            if len(h) == k:
                res = max(res, prefixSum * n2)
                prefixSum -= heapq.heappop(h)
                
        return res