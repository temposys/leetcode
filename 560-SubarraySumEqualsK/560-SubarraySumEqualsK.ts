// 15 min
function subarraySum(nums: number[], k: number): number {
    let map: Map<number, number> = new Map();
    map.set(0, 1); 
    let sum: number = 0, count: number = 0;

    for (let num of nums) {
        sum += num;

        if (map.has(sum - k)) {
            count += map.get(sum - k);
        }

        map.set(sum, (map.get(sum) || 0) + 1);
    }

    return count;
};