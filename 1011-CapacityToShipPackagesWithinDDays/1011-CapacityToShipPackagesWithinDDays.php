class Solution {

    /**
     * @param Integer[] $weights
     * @param Integer $days
     * @return Integer
     */
    function shipWithinDays($weights, $days) {
        $min = max($weights); // min capacity
        $max = array_sum($weights); // max capacity

        while ($min < $max) {
            $avg = floor(($min+$max)/2);
            if ($this->isPossible($weights, $days, $avg)) {
                $max = $avg;
            } else {
                $min = $avg + 1;
            }
        }

        return $min;
    }

    function isPossible($weights, $days, $avg) {
        $d = 1;
        $total = 0;
        for ($i = 0; $i < count($weights); $i++) {
            $total += $weights[$i];

            if ($total > $avg) {
                $d++; // last weight will go the next day
                $total = $weights[$i];
            }
            if ($d > $days) {
                return false;
            }
        }

        return true;
    }
}