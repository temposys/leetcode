class Solution {

    /**
     * @param String[][] $grid
     * @return Integer
     */
    function numIslands($grid) {
        if (empty($grid)) return 0;

        $islands = 0;
        $rows = count($grid);
        $cols = count($grid[0]);

        for ($i = 0; $i < $rows; $i++) {
            for ($j = 0; $j < $cols; $j++) {
                if ($grid[$i][$j] == "1") {
                    $islands++;
                    $this->dfs($grid, $i, $j, $rows, $cols);
                }
            }
        }

        return $islands;
    }

    function dfs(&$grid, $i, $j, $rows, $cols): void {
        if (
            $i < 0 || $i >= $rows || $j < 0 || $j >= $cols // out of range
            || $grid[$i][$j] == "0"
        ) {
            return;
        }

        $grid[$i][$j] = "0"; // mark as visited
        $this->dfs($grid, $i+1, $j, $rows, $cols); // right
        $this->dfs($grid, $i-1, $j, $rows, $cols); // left
        $this->dfs($grid, $i, $j+1, $rows, $cols); // up
        $this->dfs($grid, $i, $j-1, $rows, $cols); // down
    }
}