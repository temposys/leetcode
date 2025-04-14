// Last updated: 14/04/2025, 11:47:16
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function nextGreaterElements($nums) {
        $count = count($nums);
        $ans = array_fill(0, $count, -1);

        foreach ($nums as $key => $num) {
            $curKey = $key;
            while (($curKey = ($curKey === $count - 1) ? 0 : $curKey + 1) !== $key) {
                if ($nums[$curKey] > $num) {
                    $ans[$key] = $nums[$curKey];
                    break;
                }
            }
        }

        return $ans;
    }
}