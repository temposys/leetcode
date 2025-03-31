// Last updated: 31/03/2025, 15:16:14
class Solution {

    /**
     * @param String $s
     * @return String
     */
    function decodeString($s) {
        $stack = [];
        $string = "";
        $num = 0;

        for ($i = 0; $i < strlen($s); $i++) {
            $char = $s[$i];

            if (is_numeric($char)) {
                $num = $num * 10 + intval($char);
            } elseif ($char === '[') {
                array_push($stack, [$string, $num]);
                $string = '';
                $num = 0;
            } elseif ($char === ']') {
                list($prevStr, $repeatNum) = array_pop($stack);
                $string = $prevStr . str_repeat($string, $repeatNum);
            } else {
                $string .= $char;
            }
        }

        return $string;
    }
}