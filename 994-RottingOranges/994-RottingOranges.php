// Last updated: 13/04/2025, 18:50:43
class Solution {

    /**
     * @param Integer[][] $grid
     * @return Integer
     */
    function orangesRotting($grid) {
        $n = count($grid);
        $m = count($grid[0]);
        $min = 0;
        $distance = [[0,1], [0,-1], [1,0], [-1,0]];
        $fresh = 0;
        $queue = [];

        for ($i = 0; $i < $n; $i++) {
            for ($j = 0; $j < $m; $j++) {
                if ($grid[$i][$j] === 1) // fresh
                    $fresh++;
                elseif ($grid[$i][$j] === 2) // rotted
                    $queue[] = [$i,$j];
            }
        }

        if ($fresh === 0) return 0;

        while (($size = count($queue)) > 0) {
            for ($i = 0; $i < $size; $i++) {
                [$x, $y] = array_shift($queue);
                
                foreach ($distance as $value) {
                    $newX = $x + $value[0];
                    $newY = $y + $value[1];
                    if ($grid[$newX][$newY] === 1) {
                        $queue[] = [$newX, $newY];
                        $grid[$newX][$newY] = 2; // mark as rotted
                        $fresh--;
                    } 
                }
            }

            $min++;

            if ($fresh === 0) return $min;
        }

        return -1;
    }
}