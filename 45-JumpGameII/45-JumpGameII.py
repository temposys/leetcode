# Last updated: 24/04/2025, 17:23:09
class Solution(object):
    def jump(self, nums):
        """
        :type nums: List[int]
        :rtype: int
        """
        l = len(nums)
        goal = l - 1
        prev = goal + 1
        steps = 0

        while goal > 0 and prev > goal:
            prev = goal
            for i in range(0, goal):
                if i + nums[i] >= goal:
                    goal = i
                    steps += 1
                    break
        
        return steps if goal == 0 else -1