# Last updated: 22/05/2025, 18:32:55
# Definition for a binary tree node.
# class TreeNode:
#     def __init__(self, val=0, left=None, right=None):
#         self.val = val
#         self.left = left
#         self.right = right
class Solution:
    def invertTree(self, root: Optional[TreeNode]) -> Optional[TreeNode]:
        def invert(node):
            if not node:
                return
            node.left, node.right = node.right, node.left
            invert(node.right)
            invert(node.left)
            return
        
        invert(root)
        return root