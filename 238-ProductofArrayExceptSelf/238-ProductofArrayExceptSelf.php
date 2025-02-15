class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     * 17:18 - 17:49
     */
    function productExceptSelf($nums) {
        $count = $j = count($nums);

        $right = 1;
        $left = 1;
        
        $res = array_fill(0, $count, 1);
        foreach ($nums as $i => $value) {
            $j--;
            $res[$i] *= $left;
            $left *= $value;

            $res[$j] *= $right;
            $right *= $nums[$j];
        }

        return $res;
    }
}