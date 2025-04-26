# Last updated: 26/04/2025, 15:09:38
class Solution(object):
    def twoSum(self, numbers, target):
        """
        :type numbers: List[int]
        :type target: int
        :rtype: List[int]
        """
        start = 0
        end = len(numbers) - 1

        while (start < end):
            cur_sum = numbers[start] + numbers[end]
            if cur_sum == target: return [start + 1, end + 1]
            elif cur_sum > target: end -= 1
            else: start += 1
        
