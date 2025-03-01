class Solution {

    /**
     * @param Integer[] $cost
     * @return Integer
     */
    function minCostClimbingStairs($cost) { // [10, 15, 20]
        // $cost[] = 0; // [10, 15, 20, 0]
        // for ($i = count($cost) - 3; $i >= 0; $i--) { // 1 0
        //     $cost[$i] += min($cost[$i+1], $cost[$i+2]); // [10, 15+0, 20, 0] [10+15, 15, 20, 0]
        // }

        // return min($cost[0], $cost[1]); // min(25, 15) = 15

        $first = $cost[0]; // 10
        $second = $cost[1]; // 15

        for ($i = 2; $i < count($cost); $i++) { // 2
            $current = min($first, $second) + $cost[$i]; // 10 + 20
            $first = $second; // 15
            $second = $current; // 30
        }

        return min($first, $second); // min (15, 30) = 15
    }
}