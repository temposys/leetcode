# Last updated: 13/05/2025, 19:33:01
# Definition for a binary tree node.
# class TreeNode:
#     def __init__(self, val=0, left=None, right=None):
#         self.val = val
#         self.left = left
#         self.right = right
class Solution:
    def isMirror(self, right, left) -> bool:
        if left is None and right is None:
            return True
        if left is  None or right is None or left.val != right.val:
            return False
    
        return self.isMirror(right.right, left.left) and self.isMirror(right.left, left.right)

    def isSymmetric(self, root: Optional[TreeNode]) -> bool:
        return self.isMirror(root, root)