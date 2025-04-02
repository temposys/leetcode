// Last updated: 02/04/2025, 14:59:21
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
            $middle = (int) (($right + $left) / 2);
            $valid = true;
            $curHours = 0;

            foreach($piles as $pile) {
                $curHours += (int) ceil($pile/$middle);
                if($curHours > $h) {
                    $valid = false;
                    break;
                }
            }

            if ($valid) {
                $right = $middle;
            } else {
                $left = $middle + 1;
            }
        }

        return $left;
    }
}