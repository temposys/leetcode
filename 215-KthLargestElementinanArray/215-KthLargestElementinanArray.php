// Last updated: 13/04/2025, 10:06:37
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer
     */
    function findKthLargest($nums, $k) {
        $minHeap = new SplMinHeap();

        foreach ($nums as $num) {
            $minHeap->insert($num);
            if ($minHeap->count() > $k) {
                $minHeap->extract();
            }
        }

        return $minHeap->top();
    }
}