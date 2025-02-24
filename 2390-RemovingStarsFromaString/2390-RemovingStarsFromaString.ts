// Last updated: 23/02/2025, 19:23:37
function removeStars(s: string): string {
    let arr: string[] = [];
    for (let i = 0; i < s.length; i++) {
        if (s[i] === '*') {
            arr.pop();
        } else {
            arr.push(s[i]);
        }
    }

    return arr.join("");
};