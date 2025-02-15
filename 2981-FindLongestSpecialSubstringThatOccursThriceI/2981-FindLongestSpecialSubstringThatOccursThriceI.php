class Solution {

    /**
     * @param String $s
     * @return Integer
     * 40 min
     */
    function maximumLength($s) {
        $maxL = 0;
        $checkL = 0;

        do {
            $hash = [];
            $checkL++;
            for ($i = 0; $i <= strlen($s)-$checkL; $i++) {
                $substr = substr($s, $i, $checkL);
                if (count( array_unique( str_split( $substr ))) === 1) {
                    $hash[$substr]++;
                }
                
                if ($hash[$substr] && $hash[$substr] === 3) {
                    $maxL++;
                    break;
                }
            }  
        } while (in_array(3, $hash));
    
        return $maxL > 0 ? $maxL : -1;
    }
}