class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function validPalindrome($s) {
        $start = 0;
        $end = strlen($s) - 1;

        while ($start < $end) {
            if ($s[$start] !== $s[$end]) {
                // try to remove 1 item
                return ($this->check($s, $start+1, $end) || $this->check($s, $start, $end-1));
            }
            $start++;
            $end--;
        }

        return true;
    }

    function check($s, $start, $end) {
        while ($start <= $end) {
            if ($s[$start] !== $s[$end]) {
                return false;
            }
            $start++;
            $end--;
        }

        return true;
    }
}