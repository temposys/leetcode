// Last updated: 17/04/2025, 18:03:53
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function findErrorNums($nums) {
        $count = count($nums);
        $set = [];
        $duplicated = -1;
        $actualSum = 0;
        $expectedSum = ($count*($count + 1)) / 2;
 
        foreach ($nums as $key => $num) {
            if (isset($set[$num])) {
                $duplicated = $num;
            } else {
                $set[$num] = true;
            }
            $actualSum += $num;
        }

        return [$duplicated, $expectedSum - ($actualSum - $duplicated)];
    }
}