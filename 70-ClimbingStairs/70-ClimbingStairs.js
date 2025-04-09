// Last updated: 08/04/2025, 20:52:23
/**
 * @param {number} n
 * @return {number}
 */
var climbStairs = function(n) {
    if (n <= 3) return n;

    first = 2;
    second = 3;
    cur = 0;

    for (let i = 3; i < n; i++) {
        cur = first + second;
        first = second;
        second = cur;
    }

    return cur;
};