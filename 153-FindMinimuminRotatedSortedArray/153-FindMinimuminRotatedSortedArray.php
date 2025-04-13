// Last updated: 13/04/2025, 14:40:21
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findMin($nums) {
        $left = 0;
        $right = count($nums) - 1;

        while ($left < $right) {
            $mid = floor(($right + $left)/2);

            if ($nums[$mid] > $nums[$right]) {
                $left = $mid + 1;
            } else {
                $right = $mid;
            }
        }

        return $nums[$left];
    }
}