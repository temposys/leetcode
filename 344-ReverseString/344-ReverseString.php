// Last updated: 15/04/2025, 08:56:58
class Solution {

    /**
     * @param String[] $s
     * @return NULL
     */
    function reverseString(&$s) {
        $start = 0;
        $end = count($s) - 1;
        while ($end > $start) {
            [$s[$start], $s[$end]] = [$s[$end], $s[$start]];
            $start++;
            $end--;
        }

        return $s;
    }
}