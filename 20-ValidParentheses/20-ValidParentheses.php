// Last updated: 30/03/2025, 13:19:10
class Solution {
    private array $bracketMap = ['(' => ')', '{' => '}', '[' => ']'];

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        $length = strlen($s);
        if ($length % 2 === 1) {
            return false;
        }

        $stack = [];
        for ($i = 0; $i < $length; $i++) {
            if (isset($this->bracketMap[$s[$i]])) {
                array_push($stack, $this->bracketMap[$s[$i]]);
            } elseif ($s[$i] !== array_pop($stack)) {
                return false;
            }
        }

        return empty($stack);
    }
}