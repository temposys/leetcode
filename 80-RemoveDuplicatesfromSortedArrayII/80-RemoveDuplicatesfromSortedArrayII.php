// Last updated: 21/04/2025, 17:27:03
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
        $count = 0;
        $cur = $nums[0];
        $i = 0;
        $k = 0;
        while (isset($nums[$i])) {
            if ($cur === $nums[$i]) {
                $count++;
                if ($count > 2) {
                    unset($nums[$i]);
                }
            } else {
                $cur = $nums[$i];
                $count = 1;
            }
            $i++;
            $k++;
        }

        return $k;
    }
}