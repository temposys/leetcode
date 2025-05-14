# Last updated: 13/05/2025, 19:28:07
# Definition for a binary tree node.
# class TreeNode:
#     def __init__(self, val=0, left=None, right=None):
#         self.val = val
#         self.left = left
#         self.right = right
class Solution:
    def isMirror(self, right, left) -> bool:
        if (left is None and right is not None) or (left is not None and right is None) or (left is not None and right is not None and left.val != right.val):
            return False
        if (left is None and right) is None or (left.right is None and left.left is None and right.right is None and right.left is None and left.val == right.val):
            return True
    
        return self.isMirror(right.right, left.left) and self.isMirror(right.left, left.right)

    def isSymmetric(self, root: Optional[TreeNode]) -> bool:
        return self.isMirror(root.left, root.right)