# Last updated: 26/05/2025, 11:15:28
# Definition for a binary tree node.
# class TreeNode:
#     def __init__(self, val=0, left=None, right=None):
#         self.val = val
#         self.left = left
#         self.right = right
class Solution:
    cnt = 0
    def goodNodes(self, root: TreeNode) -> int:
        def dfs(node, arr):
            if not node:
                return
            isGood = True
            for i in arr:
                if node.val < i:
                    isGood = False
                    break
            if isGood: 
                self.cnt += 1
            arr = arr + [node.val]
            dfs(node.right, arr)
            dfs(node.left, arr)
        
        dfs(root, [])
        return self.cnt