// Last updated: 27/03/2025, 21:03:28
class Solution {

    /**
     * @param String[] $words
     * @param Integer $k
     * @return String[]
     */
    function topKFrequent($words, $k) {
        $map = [];

        foreach ($words as $word) {
            $map[$word] = ($map[$word] ?? 0) + 1;
        }
        array_multisort(array_values($map), SORT_DESC, array_keys($map), SORT_ASC, $map);

        return array_slice(array_keys($map), 0, $k);

        // $countValues = array_count_values($words);
        // ksort($countValues);
        // arsort($countValues);
        // return array_slice(array_keys($countValues), 0, $k);
    }
}