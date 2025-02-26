// Last updated: 25/02/2025, 19:49:58
class Solution {

    /**
     * @param Float $x
     * @param Integer $n
     * @return Float
     */
    function myPow($x, $n) {
        if ($x === 0) return 0;
        if ($n === 0) return 1;

        // if (abs($x) < PHP_FLOAT_MIN && $n < 0) {
        //     return INF; // Avoid division by zero
        // }

        $rasing = 1;
        $deg = abs($n);

        while ($deg != 0) {
            if ($deg % 2 === 0) {
                $x *= $x;
                $deg /= 2;
            } else {
                $rasing *= $x;
                $deg--;
            }
        }

        return $n > 0 ? $rasing : 1/$rasing;
    }
}