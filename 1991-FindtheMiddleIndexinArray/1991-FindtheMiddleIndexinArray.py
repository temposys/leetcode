# Last updated: 18/04/2025, 14:26:19
class Solution(object):
    def findMiddleIndex(self, nums):
        """
        :type nums: List[int]
        :rtype: int
        """
        sumL = 0
        sumR = sum(nums)

        for key, num in enumerate(nums):
            sumR -= num
            if sumL == sumR:
                return key
            sumL += num
        
        return -1