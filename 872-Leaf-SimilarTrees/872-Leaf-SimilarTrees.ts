/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     val: number
 *     left: TreeNode | null
 *     right: TreeNode | null
 *     constructor(val?: number, left?: TreeNode | null, right?: TreeNode | null) {
 *         this.val = (val===undefined ? 0 : val)
 *         this.left = (left===undefined ? null : left)
 *         this.right = (right===undefined ? null : right)
 *     }
 * }
 */

function leafSimilar(root1: TreeNode | null, root2: TreeNode | null): boolean {
     const dfs = (root: TreeNode | null): number[] => {
        // If the current node is null, return an empty array
        if (root === null) {
            return [];
        }

        // Recursively explore the left and right children, and accumulate leaf values
        const leaves = dfs(root.left).concat(dfs(root.right));

        // If 'leaves' is empty, it means this is a leaf node, so return its value
        // Otherwise, it means this is an internal node and 'leaves' contains its subtree's leaves
        return leaves.length > 0 ? leaves : [root.val];
    };

    // Compare the leaf value sequences of both trees
    return JSON.stringify(dfs(root1)) === JSON.stringify(dfs(root2));
};