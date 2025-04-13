// Last updated: 13/04/2025, 14:06:20
class Solution {

    /**
     * @param Integer[][] $intervals
     * @param Integer[] $newInterval
     * @return Integer[][]
     */
    function insert($intervals, $newInterval) {
        $n = count($intervals);
        if ($n === 0) {
            return [$newInterval];
        }

        $result = [];

        $i = 0;

        while ($i < $n && $intervals[$i][1] < $newInterval[0]) {
            $result[] = $intervals[$i];
            $i++;
        }

        while ($i < $n && $intervals[$i][0] <= $newInterval[1]) {
            $newInterval[0] = min($intervals[$i][0], $newInterval[0]);
            $newInterval[1] = max($intervals[$i][1], $newInterval[1]);
            $i++;
        }

        $result[] = $newInterval;

        while ($i < $n) {
            $result[] = $intervals[$i];
            $i++;
        }

        return $result;
    }
}