// Last updated: 21/04/2025, 17:28:53
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
        if (count($nums) <= 2) {
            return count($nums);
        }
        $count = 0;
        $cur = $nums[0];
        $i = 0;
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
        }

        return $i;
    }
}