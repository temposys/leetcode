class Solution {
// 25 min
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function pivotIndex($nums) {
        $sumLeft = 0;
        $sumRight = array_sum($nums) - $nums[0];
        if ($sumLeft === $sumRight) {
            return 0;
        }
        for ($i = 1; $i < count($nums); $i++) {
            $sumLeft += $nums[$i-1];
            $sumRight -= $nums[$i];

            if ($sumLeft === $sumRight) {
                return $i;
            }
        }

        return -1;
    }
}