# Last updated: 14/09/2025, 17:02:24
class Solution:
    def shuffle(self, nums: List[int], n: int) -> List[int]:
        middle = len(nums) // 2
        leftHalf = nums[:middle]
        rightHalf = nums[middle:]

        shuffle = []
        for i in range(0, middle):
            shuffle.append(leftHalf[i])
            shuffle.append(rightHalf[i])

        if len(rightHalf) > middle:
            shuffle.append(rightHalf[i+1])
        
        return shuffle