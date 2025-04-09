// Last updated: 08/04/2025, 20:14:39
function rob(nums: number[]): number {
    if (nums.length === 1) {
        return nums[0];
    }
    if (nums.length === 2) {
        return Math.max(nums[0], nums[1]);
    }

    return Math.max(checkStreet(nums, 0, nums.length - 1), checkStreet(nums, 1, nums.length));
};

function checkStreet(nums, start, end) {
    let rob1 = 0;
    let rob2 = 0;

    for (let i = start; i < end; i++) {
        const temp = Math.max(nums[i] + rob1, rob2);
        rob1 = rob2;
        rob2 = temp;
    }

    return rob2;
}