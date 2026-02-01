# Last updated: 31/01/2026, 19:37:07
1class Solution:
2    def minimumCost(self, nums: List[int]) -> int:
3        summ = nums[0]
4        nums.remove(nums[0])
5        min1 = min(nums)
6        nums.remove(min1)
7        min2 = min(nums)
8
9        return summ + min1 + min2