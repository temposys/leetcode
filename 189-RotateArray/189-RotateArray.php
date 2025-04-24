// Last updated: 23/04/2025, 19:51:59
class Solution {

	function rotate(&$nums, $k) {
        $count = count($nums);
        if ($count === 0) return $nums;

        $k = $k % $count;
        if ($k === 0) return $nums;

        $nums = array_merge(
            array_slice($nums, -$k),
            array_slice($nums, 0, $count - $k),
        );
        return $nums;
    }
}