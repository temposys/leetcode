class Solution {

    /**
     * @param String[][] $grid
     * @return Integer
     */
    function numIslands($grid) {
        if (empty($grid)) return 0;

        $islands = 0;

        for ($i = 0; $i < count($grid); $i++) {
            for ($j = 0; $j < count($grid[0]); $j++) {
                if ($grid[$i][$j] == "1") {
                    $islands++;
                    $this->dfs($grid, $i, $j);
                }
            }
        }

        return $islands;
    }

    function dfs(&$grid, $i, $j): void {
        if (!isset($grid[$i][$j]) || $grid[$i][$j] == "0") {
            return;
        }

        $grid[$i][$j] = "0";
        $this->dfs($grid, $i+1, $j);
        $this->dfs($grid, $i-1, $j);
        $this->dfs($grid, $i, $j+1);
        $this->dfs($grid, $i, $j-1);
    }
}