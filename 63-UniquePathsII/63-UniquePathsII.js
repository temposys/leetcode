// Last updated: 09/04/2025, 19:22:12
/**
 * @param {number[][]} obstacleGrid
 * @return {number}
 */
var uniquePathsWithObstacles = function(obstacleGrid) {
    if (obstacleGrid[0][0] === 1) return 0;

    const m = obstacleGrid.length;
    const n = obstacleGrid[0].length;

    let grid = Array.from({ length: m }, () => Array(n).fill(0));

    // first row
    for (let j = 0; j < n; j++) {
        if (obstacleGrid[0][j] === 1) break;
        grid[0][j] = 1;
    }

    // first col
    for (let i = 0; i < m; i++) {
        if (obstacleGrid[i][0] === 1) break;
        grid[i][0] = 1;
    }


    for (let i = 1; i < m; i++) {
        for ( let j = 1; j < n; j++) {
            grid[i][j] = (obstacleGrid[i][j] === 1) ? 0 : grid[i-1][j] + grid[i][j-1];
        }
    }

    return grid[m-1][n-1];
};