# Last updated: 29/04/2025, 15:17:20
class Solution:
    def fourSum(self, nums: List[int], target: int) -> List[List[int]]:
        nums.sort()

        def two_sum(start, target):
            end = len(nums)-1
            pairs = []
            while start < end:
                sm = nums[start] + nums[end]
                if sm == target:
                    pairs.append([nums[start], nums[end]])
                    start, end = start+1, end-1
                    while start < end and nums[start] == nums[start-1]:
                        start += 1
                elif sm > target:
                    end -= 1
                else:
                    start += 1
            
            return pairs

        def k_sum(start, k, target):
            if len(nums) < k or start == len(nums) or nums[start] * k > target or nums[-1] * k < target:
                return []
            
            if k == 2:
                return two_sum(start, target)

            quads = []
            for i in range(start, len(nums)):
                if start != i and nums[i] == nums[i-1]:
                    continue
                lists = k_sum(i+1, k-1, target-nums[i])
                for lst in lists:
                    lst.insert(0, nums[i])

                for lst in lists:
                    quads.append(lst)
            return quads

        return k_sum(0, 4, target)
