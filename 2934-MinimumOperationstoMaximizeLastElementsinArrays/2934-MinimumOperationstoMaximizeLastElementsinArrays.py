# Last updated: 18/04/2025, 16:06:43
class Solution:
    def minOperations(self, nums1: List[int], nums2: List[int]) -> int:
        dp1, dp2 = 0, 0
        for a,b in zip(nums1, nums2):
            if max(a, b) > max(nums1[-1], nums2[-1]): return -1
            if min(a, b) > min(nums1[-1], nums2[-1]): return -1
            if a > nums1[-1] or b > nums2[-1]: dp1 += 1
            if a > nums2[-1] or b > nums1[-1]: dp2 += 1
        return min(dp1, dp2)