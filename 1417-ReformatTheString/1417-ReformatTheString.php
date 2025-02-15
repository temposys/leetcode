class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reformat($s) {
        $letters = preg_replace("/[^a-z]+/","", $s);
        $letterArr = empty($letters) ? [] : str_split($letters);
        
        $numbers = preg_replace("/[^0-9]+/","", $s);
        $numberArr = empty($numbers) ? [] : str_split($numbers);

        $diff = count($letterArr) - count($numberArr);
        $minAmount = min(count($letterArr), count($numberArr));

        $result = "";

        if (abs($diff) > 1) {
            return $result;
        }

        if (count($letterArr) > count($numberArr)) {
            $firstArr = $letterArr;
            $secondArr = $numberArr;
        } else {
            $firstArr = $numberArr;
            $secondArr = $letterArr;
        }
        for ($i = 0; $i < $minAmount; $i++) {
            $result .= $firstArr[$i] . $secondArr[$i];
        }

        if (count($letterArr) !== count($numberArr)) {
            $result .= $firstArr[$i];
        }
        
        return $result;
    }
}