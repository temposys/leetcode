// Last updated: 22/04/2025, 21:06:34
class Solution {

    /**
     * @param Integer $n
     * @return Boolean
     */
    function isHappy($n) {
        $set = [];
        $res = $n;
        while ($res > 1 && !in_array($res, $set)) {
            $set[] = $res;
            $res = $this->calculate($res);
        }

        return $res === 1;
    }

    function calculate($number)
    {
        $res = 0;

        while ($number > 0) {
            $rest = $number % 10;
            $number = floor($number/10);
            $res += $rest * $rest;
        }

        return $res;
    }
}