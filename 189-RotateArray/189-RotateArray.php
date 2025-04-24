// Last updated: 23/04/2025, 19:52:05
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return NULL
     */
    function rotate(&$nums, $k) {
        $len = count($nums);
        if ($len === 1) return $nums;
        
        $k = $k % $len;
        if ($k === 0) return $nums;

        $nums = array_merge(array_slice($nums, -$k), array_slice($nums, 0, $len - $k));
    }
}