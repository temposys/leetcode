// Last updated: 16/04/2025, 13:03:12
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElement($nums) {
        $map = [];

        foreach ($nums as $num) {
            $map[$num]++;
        }

        arsort($map);

        return array_shift(array_keys($map));
    }
}