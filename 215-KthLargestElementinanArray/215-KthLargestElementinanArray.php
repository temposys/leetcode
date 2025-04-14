// Last updated: 14/04/2025, 14:28:28
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer
     */
    function findKthLargest($nums, $k) {
        $max = max($nums);

        $count = array_fill(0, 20001, 0);

        foreach ($nums as $num) {
            $count[10000+$num]++;
        }

        for ($i = count($count) - 1; $i >= 0; $i--) {
            if ($count[$i] > 0) {
                $k -= $count[$i];
                if ($k <= 0) return $i - 10000;
            }
        }

        return -1;


        // $minHeap = new SplMinHeap();

        // foreach ($nums as $num) {
        //     $minHeap->insert($num);
        //     if ($minHeap->count() > $k) {
        //         $minHeap->extract();
        //     }
        // }

        // return $minHeap->top();
    }
}