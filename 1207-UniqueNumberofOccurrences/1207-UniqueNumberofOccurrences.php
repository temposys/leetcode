class Solution {

    /**
     * @param Integer[] $arr
     * @return Boolean
     * 16:15
     */
    function uniqueOccurrences($arr) {
        $hash = [];
        foreach ($arr as $a) {
            $hash[$a]++;
        }     
        return count($hash) === count(array_unique($hash));
    }
}