# Last updated: 21/05/2025, 20:31:50
# Definition for a binary tree node.
# class TreeNode:
#     def __init__(self, val=0, left=None, right=None):
#         self.val = val
#         self.left = left
#         self.right = right
class Solution:
    def averageOfLevels(self, root: Optional[TreeNode]) -> List[float]:
        def bfs(node, level, arr):
            if node is None:
                return
            if len(arr) < level+1:
                arr.append([node.val])
            else:
                arr[level].append(node.val)
            bfs(node.left, level + 1, arr)
            bfs(node.right, level + 1, arr)
            return
        
        arr = []
        bfs(root, 0, arr)

        res = []
        for i in arr:
            res.append(round(sum(i)/len(i), 5))
        
        return res

        