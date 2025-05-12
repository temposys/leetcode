# Last updated: 11/05/2025, 17:16:43
# Definition for a binary tree node.
# class TreeNode:
#     def __init__(self, val=0, left=None, right=None):
#         self.val = val
#         self.left = left
#         self.right = right
class Solution:
    def checkSum(self, summ, node, targetSum) -> bool:
        if node is None:
            return False
        summ += node.val
        
        if node.right is None and node.left is None:
            return summ == targetSum
        
        return self.checkSum(summ, node.right, targetSum) or self.checkSum(summ, node.left, targetSum)

    def hasPathSum(self, root: Optional[TreeNode], targetSum: int) -> bool:
        if root is None:
            return False
            
        return self.checkSum(0, root, targetSum)