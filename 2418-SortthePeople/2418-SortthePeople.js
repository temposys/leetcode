/**
 * @param {string[]} names
 * @param {number[]} heights
 * @return {string[]}
 */
var sortPeople = function(names, heights) {
    let hashMap = new Map();

    for (let i = 0; i < names.length; i++) {
        hashMap.set(heights[i], names[i]);
    }

    let sortedHeignts = heights.sort((a, b) => b-a);

    let sortedNames = [];
    for (let h of sortedHeignts) {
        sortedNames.push(hashMap.get(h));
    }

    return sortedNames;
};