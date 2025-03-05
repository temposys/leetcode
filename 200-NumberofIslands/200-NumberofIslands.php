class Solution {

    /**
     * @param String[][] $grid
     * @return Integer
     */
    function numIslands($grid) {
    if (empty($grid)) return 0;
    
    $rows = count($grid);
    $cols = count($grid[0]);
    $numIslands = 0;
    
    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < $cols; $j++) {
            if ($grid[$i][$j] === '1') {
                $numIslands++;
                $this->dfs($grid, $i, $j, $rows, $cols);
            }
        }
    }
    
    return $numIslands;
    }


    function dfs(&$grid, $i, $j, $rows, $cols) {
    if ($i < 0 || $i >= $rows || $j < 0 || $j >= $cols || $grid[$i][$j] === '0') {
        return;
    }
    
    $grid[$i][$j] = '0'; // Mark as visited
    
    // Explore all 4 directions
    $this->dfs($grid, $i + 1, $j, $rows, $cols); // Down
    $this->dfs($grid, $i - 1, $j, $rows, $cols); // Up
    $this->dfs($grid, $i, $j + 1, $rows, $cols); // Right
    $this->dfs($grid, $i, $j - 1, $rows, $cols); // Left
}

    
}