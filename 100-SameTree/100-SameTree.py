# Last updated: 11/05/2025, 16:55:52
# Definition for a binary tree node.
# class TreeNode:
#     def __init__(self, val=0, left=None, right=None):
#         self.val = val
#         self.left = left
#         self.right = right
class Solution:
    def compare(self, n1, n2):
            if n1 == None and n2 == None:
                return True
            if (n1 == None and n2 != None) or (n1 != None and n2 == None) or n1.val != n2.val:
                return False
            return self.compare(n1.left, n2.left) and self.compare(n1.right, n2.right)

    def isSameTree(self, p: Optional[TreeNode], q: Optional[TreeNode]) -> bool:
        return self.compare(p, q)