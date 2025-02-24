function findKthLargest(nums: number[], k: number): number {
    const hash = new Map();
    for (const num of nums) {
        hash.set(num, (hash.get(num) || 0) + 1);
    }
    const minNum = Math.min(...nums);
    const maxNum = Math.max(...nums);
    let count = 0;
    for (let num = maxNum; num >= minNum; num--) {
        if (hash.has(num)) {
            count += hash.get(num)
            if (count >= k) return num;
        }
    }
    return -1;
};