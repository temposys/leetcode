// Last updated: 28/03/2025, 20:30:08
class Solution {

    /**
     * @param String $s
     * @return String
     */
    function longestPalindrome($s) {
        $length = strlen($s);
        if ($length === 0) {
            return "";
        }
        if (strrev($s) === $s) {
            return $s;
        }

        $palindrome = "";

        for ($i = 0; $i < $length; $i++) {
            $longest = "";
            $temp = "";

            for ($j = $i; $j < $length; $j++) {
                $temp .=$s[$j];

                if ($temp === strrev($temp)) {
                    $longest = $temp;
                }
            }

            if (strlen($longest) > strlen($palindrome)) {
                $palindrome = $longest;
            }
        }

        return $palindrome;
    }
}