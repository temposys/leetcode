# Last updated: 24/04/2025, 18:21:36
class Solution(object):
    

    def canReach(self, arr, start):
        """
        :type arr: List[int]
        :type start: int
        :rtype: bool
        """
        def bfs(i):
            if i < 0 or i >= len(arr) or arr[i] < 0:
                return False 
            if arr[i] == 0:
                return True
            jump = arr[i]
            arr[i] = -1
            return bfs(i + jump) or bfs(i - jump)

        return bfs(start)

    
        