// Last updated: 30/03/2025, 12:53:39
class Solution {
    private array $chars = ['(' => ')', '{' => '}', '[' => ']'];

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        $stack = [];
        for ($i = 0; $i < strlen($s); $i++) {
            if (in_array($s[$i], $this->chars)) {
                // closed bracket
                if (end($stack) === null) {
                    return false;
                }
                if ($s[$i] === $this->chars[end($stack)]) {
                    // pair found
                    array_pop($stack); // remove last element
                } else {
                    $stack[] = $s[$i];
                }
            } else {
                $stack[] = $s[$i];
            }
        }

        return empty($stack);
    }
}