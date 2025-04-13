// Last updated: 13/04/2025, 15:10:17
/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($val = 0, $left = null, $right = null) {
 *         $this->val = $val;
 *         $this->left = $left;
 *         $this->right = $right;
 *     }
 * }
 */
class Solution {

    /**
     * @param TreeNode $root
     * @return String[]
     */
    function binaryTreePaths($root) {
        $res = [];

        if ($root->left !== null) {
            $res = array_merge($res, $this->binaryTreePaths($root->left));
        }
        if ($root->right !== null) {
            $res = array_merge($res, $this->binaryTreePaths($root->right));
        }

        if (empty($res)) {
            return [strval($root->val)];
        }

        for ($i = 0; $i < count($res); $i++) {
            $res[$i] = strval($root->val) . '->' . $res[$i];
        } 

        return $res;
    }
}