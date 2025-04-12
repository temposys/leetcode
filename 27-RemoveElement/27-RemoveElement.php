// Last updated: 12/04/2025, 12:09:57
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    function removeElement(&$nums, $val) {
        $k = count($nums);
        if ($k === 0) return 0;

        $i = 0;

        while (isset($nums[$i]) && $nums[$i] != '_') {
            if ($nums[$i] === $val) {
                unset($nums[$i]);
                array_push($nums, '_');
                $k--;
            }
            
            $i++;
        }

        return $k;
    }
}