// Last updated: 02/04/2025, 16:31:28
class Solution {

    /**
     * @param Integer[] $piles
     * @param Integer $h
     * @return Integer
     */
    function minEatingSpeed($piles, $h) {
        $left = 1;
        $right = max($piles);
        
        while ($left < $right) {
            $middle = intval(($right + $left) / 2);

            if ($this->canEat($piles, $h, $middle)) {
                $right = $middle;
            } else {
                $left = $middle + 1;
            }
        }

        return $left;
    }

    function canEat($piles, $h, $middle)
    {
        $hours = 0;

        foreach($piles as $pile) {
            $hours += ceil($pile/$middle);
            if ($hours > $h) {
                return false;
            }
        }

        return true;
    }
}