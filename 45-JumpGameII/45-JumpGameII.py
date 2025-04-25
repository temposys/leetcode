# Last updated: 24/04/2025, 17:43:37
class Solution(object):
    def jump(self, nums):
        """
        :type nums: List[int]
        :rtype: int
        """
        l = len(nums)
        if l == 1:
            return 0

        jumps = 0
        cur_end = 0
        fastest = 0

        for i in range(l - 1):
            fastest = max(fastest, i + nums[i])
            if i == cur_end:
                jumps += 1
                cur_end = fastest
                if cur_end >= l - 1:
                    break
                    
        return jumps