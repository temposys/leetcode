# Last updated: 18/04/2025, 14:20:37
class Solution(object):
    def pivotIndex(self, nums):
        """
        :type nums: List[int]
        :rtype: int
        """
        sum1 = 0
        sum2 = sum(nums)
        for key, num in enumerate(nums):
            sum2 -= num
            if sum1 == sum2:
                return key
            sum1 += num
        
        return -1
        