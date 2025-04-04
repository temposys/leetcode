// Last updated: 04/04/2025, 16:08:02
class Solution {
    private $map = [
        2 => ['a', 'b', 'c'],
        3 => ['d', 'e', 'f'],
        4 => ['g', 'h', 'i'],
        5 => ['j', 'k', 'l'],
        6 => ['m', 'n', 'o'],
        7 => ['p', 'q', 'r', 's'],
        8 => ['t', 'u', 'v'],
        9 => ['w', 'x', 'y', 'z'],
    ];

    /**
     * @param String $digits
     * @return String[]
     */
    function letterCombinations($digits) {
        if (empty($digits)) {
            return [];
        }

        $res = [''];
        for ($i = 0; $i < strlen($digits); $i++) {
            $newCombinations = [];
            $letters = $this->map[$digits[$i]];

            foreach ($res as $str) {
                foreach ($letters as $char) {
                    $newCombinations[] = $str . $char;
                }
            }

            $res = $newCombinations;
        }

        return $res;
    }
}