class Solution {

    /**
     * @param Integer $num
     * @return Integer
     */
    function maximumSwap($num) {
        $arr = strval($num);
        $len = strlen($arr);
        $max = $len - 1;
        $p0 = $p1 = -1;
        
        for ($i = $len - 2; $i >= 0; $i--) {
            if ($arr[$i] > $arr[$max]) {
                $max = $i;
            } elseif ($arr[$i] < $arr[$max]) {
                $p0 = $i;
                $p1 = $max;
            }
        }

        if ($p1 > 0) {
            [$arr[$p0], $arr[$p1]] = [$arr[$p1], $arr[$p0]];
        }

        return intval($arr);
    }
}