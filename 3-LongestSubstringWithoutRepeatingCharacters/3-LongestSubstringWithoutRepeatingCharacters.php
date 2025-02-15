class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s) {
        $length = strlen($s);
        $result = 0;
        $hash = [];
        for ($i = 0; $i < $length; $i++) {
            if (($key = array_search($s[$i], $hash)) !== false) {
                $result = max($result, count($hash));
                $hash = array_slice($hash, $key + 1);
            }
            $hash[] = $s[$i];
        }
        return max($result, count($hash));
    }
}