class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Float
     * 8 min
     */
    function findMaxAverage($nums, $k) {
        $f = 0;
        $sum = $maxSum = array_sum(array_slice($nums, $f, $k));

        for ($i = $k; $i < count($nums); $i++) {
            $sum = $sum - $nums[$f] + $nums[$i];
            $f++;
            if ($sum > $maxSum) {
                $maxSum = $sum;
            }
        }

        return $maxSum/$k;
    }
}
