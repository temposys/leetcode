# Last updated: 26/05/2025, 11:19:38
# Definition for a binary tree node.
# class TreeNode:
#     def __init__(self, val=0, left=None, right=None):
#         self.val = val
#         self.left = left
#         self.right = right
class Solution:
    def goodNodes(self, root: TreeNode) -> int:
        def dfs(node, max_val):
            if not node:
                return 0
            cnt = 1 if (node.val >= max_val) else 0
            if node.val > max_val: max_val = node.val
            return cnt + dfs(node.right, max_val) + dfs(node.left, max_val)
        
        return dfs(root, root.val)