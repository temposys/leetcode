// Last updated: 13/04/2025, 20:31:46
class Solution {

    /**
     * @param String $s
     * @param String[] $wordDict
     * @return Boolean
     */
    function wordBreak($s, $wordDict) {
        $len = strlen($s);

        $wordSet = array_flip($wordDict);

        $dp = array_fill(0, $len+1, false);
        $dp[0] = true;

        for ($i = 1; $i <= $len; $i++) {
            for ($j = 0; $j < $i; $j++) {
                if ($dp[$j] && isset($wordSet[substr($s, $j, $i-$j)])) {
                    $dp[$i] = true;
                    break;
                }
            }
        }

        return $dp[$len];
    }
}