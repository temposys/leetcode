// Last updated: 13/04/2025, 12:57:38
class Solution {

    /**
     * @param Integer[][] $intervals
     * @return Integer[][]
     */
    function merge($intervals) {
        $count = count($intervals);
        if ($count === 1) {
            return $intervals;
        }

        sort($intervals);

        $result = [$intervals[0]];

        $j = 0;

        for ($i = 1; $i < count($intervals); $i++) {
            if ($result[$j][1] >= $intervals[$i][0]) {
                $result[$j] = [$result[$j][0], max($result[$j][1], $intervals[$i][1])];
            } else {
                array_push($result, $intervals[$i]);
                $j++;
            }          
        }

        return $result;
    }
}