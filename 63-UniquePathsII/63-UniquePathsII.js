// Last updated: 09/04/2025, 19:08:06
/**
 * @param {number[][]} obstacleGrid
 * @return {number}
 */
var uniquePathsWithObstacles = function(obstacleGrid) {
    if (obstacleGrid[0][0] === 1) return 0;

    const m = obstacleGrid.length;
    const n = obstacleGrid[0].length;

    if (m === 1) {
        for (let i = 0; i < n; i++) {
            if (obstacleGrid[0][i] === 1) return 0;
        }
        return 1;
    }

    if (n === 1) {
        for (let i = 0; i < m; i++) {
            if (obstacleGrid[i][0] === 1) return 0;
        }
        return 1;
    }

    let grid = new Array(m).fill(new Array(n).fill(0));

    for (let i = 0; i < m; i++) {
        for ( let j = 0; j < n; j++) {
            if (i === 0) {
                grid[i][j] = (obstacleGrid[i][j] === 1 || (j > 0 && grid[i][j-1] === 0)) ? 0 : 1;
            } else if (j === 0) {
                grid[i][j] = (obstacleGrid[i][j] === 1 || (i > 0 && grid[i-1][j] === 0)) ? 0 : 1;
            } else if (obstacleGrid[i][j] === 1) {
                grid[i][j] = 0;
            } else {
                grid[i][j] = grid[i-1][j] + grid[i][j-1];
            }
        }
    }

    return grid[m-1][n-1];
};