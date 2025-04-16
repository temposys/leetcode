// Last updated: 16/04/2025, 13:15:27
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElement($nums) {
        $count = 0;
        $value = null;

        foreach ($nums as $num) {
            if ($count === 0) {
                $value = $num;
            }

            if ($value === $num) {
                $count++;
            } else {
                $count--;
            }
        }

        return $value;

        // $map = [];

        // foreach ($nums as $num) {
        //     $map[$num]++;
        // }

        // arsort($map);

        // return array_shift(array_keys($map));
    }
}