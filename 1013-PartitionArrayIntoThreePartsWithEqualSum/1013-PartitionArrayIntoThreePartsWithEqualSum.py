# Last updated: 18/04/2025, 14:55:58
class Solution(object):
    def canThreePartsEqualSum(self, arr):
        """
        :type arr: List[int]
        :rtype: bool
        """

        total = sum(arr)
        if total % 3 != 0:
            return False

        target = total / 3
        current_sum, count = 0, 0
        endInd = len(arr) - 1

        for i in range(endInd):
            current_sum += arr[i]
            if current_sum == target:
                current_sum = 0
                count += 1
                if count == 2:
                    return True
        
        return False

        