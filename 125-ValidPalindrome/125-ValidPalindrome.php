// Last updated: 16/04/2025, 15:10:02
class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isPalindrome($s) {
        $s = strToLower($s);
        $s = preg_replace('/[^0-9a-z]/', '', $s);
        $len = strlen($s);

        if ($len <= 1) {
            return true;
        }

        $start = 0;
        $end = $len - 1;

        while ($start < $end) {
            if ($s[$start] !== $s[$end]) {
                return false;
            }

            $start++;
            $end--;
        }

        return true;
    }
}