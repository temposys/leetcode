# Last updated: 18/05/2025, 20:39:25
# Definition for a binary tree node.
# class TreeNode:
#     def __init__(self, val=0, left=None, right=None):
#         self.val = val
#         self.left = left
#         self.right = right
class Solution:
    def countNodes(self, root: Optional[TreeNode]) -> int:
        def bfs(node, summ) -> int:
            if node is None:
                return summ
            return 1 + summ + bfs(node.right, summ) + bfs(node.left, summ)
        
        return bfs(root, 0)