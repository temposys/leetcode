class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function tribonacci($n) {
        $t[0] = 0;
        $t[1] = 1;
        $t[2] = 1;

        if (isset($t[$n])) {
            return $t[$n];
        }

        for ($i = 3; $i <= $n; $i++) {
            $t[$i] = $t[$i-1] + $t[$i-2] + $t[$i-3];
        }

        return $t[$n];
    }
}