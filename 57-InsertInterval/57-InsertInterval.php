// Last updated: 13/04/2025, 14:11:48
class Solution {

    /**
     * @param Integer[][] $intervals
     * @param Integer[] $newInterval
     * @return Integer[][]
     */
    function insert($intervals, $newInterval) {
        if (empty($intervals)) {
            return [$newInterval];
        }

        $n = count($intervals);
        $result = [];
        [$newStart, $newEnd] = $newInterval;

        $i = 0;

        while ($i < $n && $intervals[$i][1] < $newStart) {
            $result[] = $intervals[$i];
            $i++;
        }

        while ($i < $n && $intervals[$i][0] <= $newEnd) {
            $newStart = min($intervals[$i][0], $newStart);
            $newEnd = max($intervals[$i][1], $newEnd);
            $i++;
        }

        $result[] = [$newStart, $newEnd];

        while ($i < $n) {
            $result[] = $intervals[$i];
            $i++;
        }

        return $result;
    }
}