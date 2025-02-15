function isPalindrome(s: string): boolean {
    s = s.toLowerCase().replace(/[^0-9a-z]/g, '');

    let j: number = 0;
    for (let i = s.length -1; i >= Math.floor(s.length/2); i--) {
        if (s[i] !== s[j]) return false;
        j++;
    }

    return true;
};