# Last updated: 02/06/2025, 20:13:13
class Solution:
    def minSubArrayLen(self, target: int, nums: List[int]) -> int:
        arr_len = len(nums)
        min_len = arr_len + 1
        summ = 0
        start = 0
        for i in range(arr_len):
            summ += nums[i]
            while summ >= target:
                min_len = min(min_len, i - start + 1)
                summ -= nums[start]
                start += 1
        
        return min_len if min_len <= arr_len else 0