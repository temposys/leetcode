# Last updated: 26/05/2025, 11:13:00
# Definition for a binary tree node.
# class TreeNode:
#     def __init__(self, val=0, left=None, right=None):
#         self.val = val
#         self.left = left
#         self.right = right
class Solution:
    def goodNodes(self, root: TreeNode) -> int:
        def dfs(node, arr):
            cnt = 0
            if not node:
                return cnt
            isGood = True
            for i in arr:
                if node.val < i:
                    isGood = False
                    break
            if isGood: 
                cnt += 1
            arr = arr + [node.val]
            return cnt + dfs(node.right, arr) + dfs(node.left, arr)
        
        return dfs(root, [])