// Last updated: 06/04/2025, 15:25:25
class Solution {

    /**
     * @param Integer $k
     * @param Integer $n
     * @return Integer[][]
     */
    function combinationSum3($k, $n) {
        $res = [];

        $this->checkOptions($k, $n, 1, [], $res);

        return $res;
    }

    function checkOptions($k, $n, $start, $current, &$res) 
    {
        if (count($current) === $k && array_sum($current) === $n) {
            $res[] = $current;
            return;
        }

        if (count($current) > $k || array_sum($current) > $n) {
            return;
        }

        for ($i = $start; $i <= 9; $i++) {
            $current[] = $i;
            $this->checkOptions($k, $n, $i + 1, $current, $res);
            array_pop($current); // backtrack
        }
    }
}