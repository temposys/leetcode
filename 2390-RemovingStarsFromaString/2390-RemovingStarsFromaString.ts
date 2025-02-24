function removeStars(s: string): string {
    let i: number = 0;
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