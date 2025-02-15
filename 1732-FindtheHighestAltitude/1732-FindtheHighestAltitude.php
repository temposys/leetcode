class Solution {
// 3 num
    /**
     * @param Integer[] $gain
     * @return Integer
     */
    function largestAltitude($gain) {
        $highestAltitude = 0;
        $altitude = 0;
        foreach ($gain as $g) {
            $altitude += $g;
            if ($altitude > $highestAltitude) {
                $highestAltitude = $altitude;
            }
        }

        return $highestAltitude;
    }
}