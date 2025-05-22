# Last updated: 21/05/2025, 20:41:23
# Definition for a binary tree node.
# class TreeNode:
#     def __init__(self, val=0, left=None, right=None):
#         self.val = val
#         self.left = left
#         self.right = right
from collections import deque

class Solution:
    def averageOfLevels(self, root: Optional[TreeNode]) -> List[float]:

        avg = []
        queue = deque([root])   # There is at least one node
        while queue:
            num_nodes_level = len(queue)
            sum_level = 0
            for _ in range(num_nodes_level):
                cur_node = queue.popleft()
                sum_level += cur_node.val
                if cur_node.left:
                    queue.append(cur_node.left)
                if cur_node.right:
                    queue.append(cur_node.right)
            avg.append(sum_level/num_nodes_level)
        return avg