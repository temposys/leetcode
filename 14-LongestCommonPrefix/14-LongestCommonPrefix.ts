function longestCommonPrefix(strs: string[]): string {
    const len: number = strs[0].length;
    if (len === 0) {
        return "";
    }

    let result = "";
    console.log(len);
    for (let i = 0; i < len; i++) {
        let checkStr = result + strs[0][i];
        for (let j = 1; j < strs.length; j++) {
            if (!strs[j].startsWith(checkStr)) {
                return result;
            }
        }
        result = checkStr;
    }

    return result;
};