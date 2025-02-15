class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function searchInsert($nums, $target) {
        $start = 0;
        $end = count($nums) - 1;

        while ($start <= $end) {
            $key = floor(($start + $end) /2);
            if ($nums[$key] === $target) {
                return $key;
            }
            if ($nums[$key] >= $target) {
                $end = $key - 1;
            } else {
                $start = $key + 1;
            }
        }
        
        return $start; 
    }
}