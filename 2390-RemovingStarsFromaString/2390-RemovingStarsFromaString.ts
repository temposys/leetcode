// Last updated: 23/02/2025, 19:27:27
function removeStars(s: string): string {
    let arr: string[] = [];
    for (let letter of s) {
        if (letter === '*') {
            arr.pop();
        } else {
            arr.push(letter);
        }
    }

    return arr.join("");
};