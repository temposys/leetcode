class Solution {

    /**
     * @param Integer $n
     * @return Integer[]
     */
    function countBits($n) {
        $res = array_fill(0, $n+1, 0);

        for ($i = 1; $i <= $n; $i++) {
            $res[$i] = $res[$i >> 1] + ($i & 1);
        }

        return $res;

        // $res = [];
        // for ($i = 0; $i <= $n; $i++) {
        //     $res[] = array_sum(str_split((string) decbin($i), 1));
        // }

        // return $res;
    }
}