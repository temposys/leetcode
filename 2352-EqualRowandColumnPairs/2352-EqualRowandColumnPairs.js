/**
 * @param {number[][]} grid
 * @return {number}
 */
var equalPairs = function(grid) {
    let count = 0;
    let n = grid.length
    let mapRows = new Map();

    for (let i = 0; i < n; i++) {
        let row = JSON.stringify(grid[i]);
        mapRows.set(row, 1 + (mapRows.get(row) || 0));
    }

    for (let j = 0; j < n; j++) {
        let col = JSON.stringify(grid.map(row => row[j]));
        count += (mapRows.get(col) || 0);
    }

    return count;
};