// Last updated: 16/04/2025, 19:40:57
class Solution {

    /**
     * @param String $s
     * @return String
     */
    function minRemoveToMakeValid($s) {
        $len = strlen($s);

        // replace closed
        $open = $close = 0;
        for ($i = 0; $i < $len; $i++) {
            if ($s[$i] === '(') {
                $open++;
                continue;
            }
            if ($s[$i] === ')') {
                $close++;
                if ($open < $close) {
                    // replace
                    $s[$i] = '#';
                    $close--;
                }
            }
        }

        $open = $close = 0;
        for ($i = $len - 1; $i >= 0; $i--) {
            if ($s[$i] === ')') {
                $close++;
                continue;
            }
            if ($s[$i] === '(') {
                $open++;
                if ($open > $close) {
                    // replace
                    $s[$i] = '#';
                    $open--;
                }
            }
        }

        return str_replace("#", "", $s);
    }
}