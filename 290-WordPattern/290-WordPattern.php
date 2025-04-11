// Last updated: 11/04/2025, 16:48:43
class Solution {

    /**
     * @param String $pattern
     * @param String $s
     * @return Boolean
     */
    function wordPattern($pattern, $s) {
        $map = [];
        $words = explode(" ", $s);

        if (strlen($pattern) !== count($words)) return false;

        for ($i = 0; $i < count($words); $i++) {
            if (isset($map[$pattern[$i]]) || in_array($words[$i], $map)) {
                if($map[$pattern[$i]] !== $words[$i]) {
                    return false;
                }
            } else {
                $map[$pattern[$i]] = $words[$i];
            }
        }
        return true;
    }
}