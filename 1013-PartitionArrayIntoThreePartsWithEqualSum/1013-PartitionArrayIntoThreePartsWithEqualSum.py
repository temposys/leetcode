# Last updated: 18/04/2025, 14:48:29
class Solution(object):
    def canThreePartsEqualSum(self, arr):
        total = sum(arr)
        if total % 3 != 0:
            return False
        target = total // 3
        count, current_sum = 0, 0
        for i in range(len(arr)):
            current_sum += arr[i]
            if current_sum == target:
                count += 1
                current_sum = 0
                if count == 2 and i < len(arr) - 1:
                    return True
        return False

