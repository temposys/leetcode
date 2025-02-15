class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
        // foreach ($nums as $key => $value) {
        //     var_dump($key);
        //     $duplicates = array_keys($nums, $value);
        //     unset($duplicates[0]);
        //     if (count($duplicates) > 0) {
        //         foreach ($duplicates as $dkey => $dval) {
        //             unset($nums[$dval]);
        //         }
        //     }
        // }
        $nums = array_unique($nums);
        return count($nums);
    }
}