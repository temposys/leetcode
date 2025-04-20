// Last updated: 19/04/2025, 20:46:38
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function sortArrayByParity($nums) {
        $even = [];
        foreach ($nums as $key => $num) {
            if ($num % 2 === 0) {
                // even
                array_push($even, $num);
                unset($nums[$key]);
            }
        }

        return array_merge($even, $nums);
    }
}