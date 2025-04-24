// Last updated: 23/04/2025, 20:04:26
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLastWord($s) {
        $words = explode(" ", trim($s));

        return strlen($words[count($words) - 1]);
    }
}