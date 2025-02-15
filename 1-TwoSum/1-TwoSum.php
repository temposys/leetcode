class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        foreach ($nums as $key => $value) {
            $founds = array_keys($nums, $target - $value);
            foreach ($founds as $found) {
                if ($key !== $found) {
                    return [$key, $found];
                }
            }
        }
        return [];
    }
}