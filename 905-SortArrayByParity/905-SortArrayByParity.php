// Last updated: 20/04/2025, 14:37:54
class Solution {
    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function sortArrayByParity($nums) {
        $pointer = 0;
        for ($i = 0; $i < count($nums); $i++) {
            if ($nums[$i] % 2 === 0) {
                $temp = $nums[$pointer];
                $nums[$pointer] = $nums[$i];
                $nums[$i] = $temp;
                $pointer++;
            }
        }

        return $nums;
    }
}