class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer[][]
     * 4 min
     */
    function findDifference($nums1, $nums2) {
        $nums1 = array_unique($nums1);
        $nums2 = array_unique($nums2);
        return [array_diff($nums1, $nums2), array_diff($nums2, $nums1)];
    }
}