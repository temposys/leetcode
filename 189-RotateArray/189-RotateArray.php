// Last updated: 23/04/2025, 19:49:30
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return NULL
     */
    function rotate(&$nums, $k) {
        $len = count($nums);
        $k = $k % $len;
        // while ($k > 0) {
        //     $temp = $nums[$len - 1];
        //     unset($nums[$len - 1]);
        //     array_unshift($nums, $temp);
        //     $k--;
        // }

        $nums = array_merge(array_slice($nums, $len - $k, $k), array_slice($nums, 0, $len - $k));
    }
}