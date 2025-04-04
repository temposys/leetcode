// Last updated: 03/04/2025, 17:30:59
class Solution {

    /**
     * @param String $a
     * @param String $b
     * @return String
     */
    function addBinary($a, $b) {
        $temp = 0;
        $res = '';
        $i = strlen($a) - 1;
        $j = strlen($b) - 1;
        while ($i >= 0 || $j >= 0) {
            $aNum = $i >= 0 ? (int) $a[$i] : 0;
            $bNum = $j >= 0 ? (int) $b[$j] : 0;
            $cur = $aNum + $bNum + $temp;

            $temp = ($cur > 1) ? 1 : 0;
            $res = ($cur % 2 === 0 ? "0" : "1") . $res;
            $i--;
            $j--;
        }
        return ($temp === 1 ? "1" : "") . $res;
    }
}