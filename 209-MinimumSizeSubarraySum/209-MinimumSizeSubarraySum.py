# Last updated: 02/06/2025, 20:17:03
class Solution:
    def minSubArrayLen(self, target: int, nums: List[int]) -> int:
        n = len(nums)
        min_len = n + 1
        summ = 0
        start = 0
        for cur in range(n):
            summ += nums[cur]
            while summ >= target:
                min_len = min(min_len, cur - start + 1)
                summ -= nums[start]
                start += 1
        
        return min_len if min_len <= n else 0