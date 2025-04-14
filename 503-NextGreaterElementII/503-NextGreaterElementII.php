// Last updated: 14/04/2025, 12:03:37
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function nextGreaterElements($nums) {
        $length = count($nums);
        $ans = array_fill(0, $length, -1);
        $stack = [];

        for ($i = 0; $i < $length * 2; $i++) {
            $element = $nums[$i % $length];

            while (!empty($stack) && $nums[end($stack)] < $element) {
                $ans[end($stack)] = $element;
                array_pop($stack);
            }
            if ($i < $length) {
                $stack[] = $i;
            }
        }

        return $ans;
    }
}