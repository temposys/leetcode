# Last updated: 24/04/2025, 18:35:51
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
            if cur_sum == target:
                return [start + 1, end + 1]
            if cur_sum > target:
                end -= 1
            else:
                start += 1
        
        return