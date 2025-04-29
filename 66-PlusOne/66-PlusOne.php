// Last updated: 28/04/2025, 17:17:41
class Solution {

    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne($digits) {
        $temp = 0;
        for ($i = count($digits) - 1; $i >= 0; $i--) {
            $cur = $digits[$i] + $temp;
            if ($i === count($digits) - 1) {
                ++$cur;
            }
            if ($cur >= 10) {
                $temp = 1;
                $digits[$i] = $cur - 10;
                if ($i === 0) {
                    array_unshift($digits, 1);
                }
            } else {
                $digits[$i] = $cur;
                break;
            }
            
        }

        return $digits;
    }
}