// Last updated: 20/04/2025, 15:25:34
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function sortArrayByParityII($nums) {
        $even = 0;
        $odd = 1;

        while ($even < count($nums) && $odd < count($nums)) {
            if ($nums[$even] % 2 === 0) {
                $even += 2;
            } else if ($nums[$odd] % 2 === 1) {
                $odd += 2;
            } else {
                [$nums[$even], $nums[$odd]] = [$nums[$odd], $nums[$even]];
                $even +=2;
                $odd += 2;
            }
        }

        return $nums;
    }
}