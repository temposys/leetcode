class Solution {

    /**
     * @param String $s
     * @return String
     * 10 min
     */
    function reverseWords($s) {
        $wordsO = explode(" ", trim($s));
        
        $wordsResult = [];
        for ($i = count($wordsO)-1; $i >= 0; $i--) {
            if ($wordsO[$i] !== '') {
                $wordsResult[] = $wordsO[$i];
            }
        }

        return implode(" ", $wordsResult);
    }
}