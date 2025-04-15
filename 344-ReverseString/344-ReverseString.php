// Last updated: 15/04/2025, 08:59:56
class Solution {

    /**
     * @param String[] $s
     * @return NULL
     */
    function reverseString(&$s) {
        $len = count($s);

        if ($len === 1) {
            return $s;
        }

        $start = 0;
        $end = $len - 1;
        while ($end > $start) {
            [$s[$start], $s[$end]] = [$s[$end], $s[$start]];
            $start++;
            $end--;
        }

        return $s;
    }
}