# Last updated: 26/04/2025, 15:40:13
class Solution:
    def searchMatrix(self, matrix: List[List[int]], target: int) -> bool:
        m, n = len(matrix), len(matrix[0])

        if target < matrix[0][0] or target > matrix[m - 1][n - 1]: return False

        start, end = 0, m * n -1

        while end >= start:
            mid = (start + end) // 2
            i, j = divmod(mid, n) # middle / cols

            if matrix[i][j] == target: return True

            if matrix[i][j] > target: end = mid - 1
            else: start = mid + 1
            
        return False