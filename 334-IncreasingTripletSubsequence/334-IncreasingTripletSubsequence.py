# Last updated: 29/04/2025, 16:21:37
class Solution:
    def increasingTriplet(self, nums: List[int]) -> bool:
        first = max(nums) + 1
        second = max(nums) + 1
        for num in nums:
            if first >= num:
                first = num
            elif second >= num:
                second = num
            else: return True
        return False