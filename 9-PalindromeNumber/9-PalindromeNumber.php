class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        return strrev((string) $x) === (string)$x;
//         $origin = (string) $x;
//         $revert = strrev($origin);
//         $revert = '';
        
//         while (strlen($origin) > 0) {
//             $revert .= substr($origin, -1);
//             $origin = substr_replace($origin, "", -1);
//         }
        
//         return (string) $x === $revert;
    }
}