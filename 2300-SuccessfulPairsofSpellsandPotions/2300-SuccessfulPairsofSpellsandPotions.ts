// Last updated: 07/04/2025, 15:18:01
function rob(nums: number[]): number {
    let rub1 = 0;
    let rub2 = 0;

    for (let i = 0; i < nums.length; i++) {
        let temp = Math.max(rub1 + nums[i], rub2);
        rub1 = rub2;
        rub2 = temp;
    }

    return rub2;
};