class Solution {

    /**
     * @param Integer[] $nums
     * @return NULL
     * 4 min
     */
    function moveZeroes(&$nums) {
        for ($i = 0; $i < count($nums); $i++) {
            if ($nums[$i] === 0) {
                $nums[] = 0;
                unset($nums[$i]);
            }
        }

        return $nums;
    }
}