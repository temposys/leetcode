// Last updated: 30/03/2025, 13:01:19
class Solution {
    private array $bracketMap = ['(' => ')', '{' => '}', '[' => ']'];

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        $stack = [];
        for ($i = 0; $i < strlen($s); $i++) {
            if (in_array($s[$i], $this->bracketMap)) {
                $lastElement = end($stack);
                // closed bracket
                if ($lastElement === null) {
                    return false;
                }
                if ($s[$i] === $this->bracketMap[$lastElement]) {
                    // pair found
                    array_pop($stack); // remove last element
                } else {
                    array_push($stack, $s[$i]);
                }
            } else {
                array_push($stack, $s[$i]);
            }
        }

        return empty($stack);
    }
}