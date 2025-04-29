# Last updated: 29/04/2025, 14:27:32
class Solution:
    def fourSum(self, nums: List[int], target: int) -> List[List[int]]:
        n = len(nums)
        seen = set()
        ans = []
        for i in range(n):
            for j in range(i+1, n):
                for k in range(j+1, n):
                    lastNumber = target - nums[i] - nums[j] - nums[k]
                    if lastNumber in seen:
                        arr = sorted([nums[i], nums[j], nums[k], lastNumber])
                        new_ans = [arr[0], arr[1], arr[2], arr[3]]
                        if new_ans not in ans:
                            ans.append(new_ans)
            seen.add(nums[i])
        return ans

