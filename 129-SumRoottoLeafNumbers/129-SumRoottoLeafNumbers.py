# Last updated: 22/05/2025, 19:02:37
# Definition for a binary tree node.
# class TreeNode:
#     def __init__(self, val=0, left=None, right=None):
#         self.val = val
#         self.left = left
#         self.right = right
class Solution:
    def sumNumbers(self, root: Optional[TreeNode]) -> int:
        nums = []
        def dfs(node, cur_path=''):
            cur_path += str(node.val)
            if node.right is None and node.left is None:
                nums.append(int(cur_path))
                return

            if node.right:
                dfs(node.right, cur_path)
            if node.left:
                dfs(node.left, cur_path)
            return
        
        dfs(root)
        return sum(nums)
            
            