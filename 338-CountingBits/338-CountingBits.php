class Solution {

    /**
     * @param Integer $n
     * @return Integer[]
     */
    function countBits($n) {
        $res = [];
        for ($i = 0; $i <= $n; $i++) {
            $res[] = array_sum(str_split((string) decbin($i), 1));
        }

        return $res;
    }
}