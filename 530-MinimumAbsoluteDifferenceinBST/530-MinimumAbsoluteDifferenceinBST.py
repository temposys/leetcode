# Last updated: 01/07/2025, 21:37:19
# Definition for a binary tree node.
# class TreeNode:
#     def __init__(self, val=0, left=None, right=None):
#         self.val = val
#         self.left = left
#         self.right = right
class Solution:
    def getMinimumDifference(self, root: Optional[TreeNode]) -> int:
        minVal = float('inf')
        vals = []
        def dfs(vals, node):
            nonlocal minVal
            if node is None:
                return
            for val in vals:
                minVal = min(abs(val-node.val), minVal)
                if minVal == 1:
                    return
            vals.append(node.val)
            dfs(vals, node.right)
            dfs(vals, node.left)
        
        dfs(vals, root)

        return minVal