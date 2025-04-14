// Last updated: 14/04/2025, 11:37:08
class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer[]
     */
    function nextGreaterElement($nums1, $nums2) {
        $nums2Set = array_flip($nums2);
        $ans = array_fill(0, count($nums1), -1);
        $count2 = count($nums2);

        foreach ($nums1 as $key => $value) {
            // get index from $nums2
            $start = $nums2Set[$value];
            for ($i = $start + 1; $i < $count2; $i++) {
                if ($nums2[$i] > $value) {
                    $ans[$key] = $nums2[$i];
                    break;
                }
            }
        }

        return $ans;
    }
}