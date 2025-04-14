// Last updated: 13/04/2025, 20:40:42
class Solution {

    /**
     * @param String $s
     * @param String[] $wordDict
     * @return Boolean
     */
    function wordBreak($s, $wordDict) {
        $len = strlen($s);

        // $wordSet = array_flip($wordDict);

        $dp = array_fill(0, $len+1, false);
        $dp[0] = true;

        for ($i = 1; $i <= $len; $i++) {
            foreach ($wordDict as $word) {
                $start = $i - strlen($word);

                if ($start >= 0 && $dp[$start] && substr($s, $start, $i-$start) == $word) {
                    $dp[$i] = true;
                    break;
                }
            }
        }

        return array_pop($dp);
    }
}