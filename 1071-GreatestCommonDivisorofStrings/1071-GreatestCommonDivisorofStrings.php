class Solution {

    /**
     * @param String $str1
     * @param String $str2
     * @return String
     */
    function gcdOfStrings($str1, $str2) {
        $result = '';
        
        for ($i = min(strlen($str1), strlen($str2)); $i > 0; $i--) {
            $option = substr($str1, 0, $i);

            if (str_replace($option, "", $str1) === '' && str_replace($option, "", $str2) === '') {
                return $option;
            }
        }

        return $result;
    }
}