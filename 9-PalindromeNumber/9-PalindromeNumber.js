/**
 * @param {number} x
 * @return {boolean}
 */
var isPalindrome = function(x) {
    if (x < 0) {
        return false;
    }
    if (x < 10) {
        return true;
    }

    let rest = x;
    let arr = [];
    while (rest > 0) {
        arr.push(rest % 10);
        rest = Math.floor(rest/10);
    }

    let start = 0;
    let end = arr.length - 1;

    while (start <= end) {
        if (arr[start] !== arr[end]) {
            return false;
        }
        start++;
        end--;
    }

    return true;
};