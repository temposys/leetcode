// Last updated: 02/04/2025, 15:11:46
class Solution {

    /**
     * @param Integer[] $piles
     * @param Integer $h
     * @return Integer
     */

    function getHours($piles, $k) {
        $hours = 0;

        foreach ($piles as $pile) {
            $hours += ceil($pile / $k);
        }
        return $hours;
    }

    function minEatingSpeed($piles, $h) {
        
        $maxPiles = max($piles);

        $left = 1;
        $right = $maxPiles;

        while ($left <= $right) {
            $mid = $left + floor(($right - $left) / 2);
            $hoursForK = $this->getHours($piles, $mid);

            if ($hoursForK <= $h) {
                $right = $mid - 1;
            }
            else {
                $left = $mid + 1;
            }
        }

        return $left;
    }
}