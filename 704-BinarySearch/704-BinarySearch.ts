function search(nums: number[], target: number): number {
    let start = 0;
    let end = nums.length - 1;
    
    while (start <= end) {
        const i: number = Math.floor((end + start)/2);
        if (nums[i] === target) {
            return i;
        } else if (nums[i] < target) {
            start = i + 1;
        } else {
            end = i - 1;
        }
    }

    return -1;
};