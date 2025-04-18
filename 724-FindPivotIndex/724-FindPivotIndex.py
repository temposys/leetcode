# Last updated: 18/04/2025, 14:17:51
class Solution(object):
    def pivotIndex(self, nums):
        """
        :type nums: List[int]
        :rtype: int
        """
        sum1 = 0
        sum2 = sum(nums)
        prev = 0
        for key, num in enumerate(nums):
            sum1 += prev
            sum2 -= num

            if sum1 == sum2:
                return key
            prev = num
        
        return -1
        