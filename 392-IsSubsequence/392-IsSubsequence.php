class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     * 15 min
     */
    function isSubsequence($s, $t) {
        $offset = -1;
        for ($i = 0; $i < strlen($s); $i++) {
            $offset++;
            $offset = strpos($t, $s[$i], $offset);
            if ($offset === false) {
                return false;
            }
        }

        return true;
    }
}