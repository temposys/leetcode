function findPeakElement(nums: number[]): number {
    let left = 0;
    let right = nums.length - 1;

    while (left < right) {
        const mid = Math.floor((left+right)/2);

        if (nums[mid] > nums[mid+1]) {
            right = mid;
        } else {
            left = mid + 1;
        }
    }

    // for (let i = 0; i < nums.length; i++) {
    //     if (
    //         (nums[i-1] === undefined || nums[i-1] < nums[i])
    //         && (nums[i+1] === undefined || nums[i] > nums[i+1])
    //     ) {
    //         return i;
    //     }
    // }

    return left;
};