# Last updated: 10/05/2025, 17:19:04
class Solution:
    def summaryRanges(self, nums: List[int]) -> List[str]:
        if len(nums) == 0:
            return []

        res = []
        start = nums[0]
        end = nums[0]

        for i, num in enumerate(nums):
            if i == 0: continue
            if num - end == 1:
                end = num
            else:
                # store prev interval
                res.append(str(end) if start == end else f"{start}->{end}")
                start = end = num
        # store last interval
        res.append(str(end) if start == end else f"{start}->{end}")

        return res
