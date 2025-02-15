/**
 Do not return anything, modify nums1 in-place instead.
 */
function merge(nums1: number[], m: number, nums2: number[], n: number): void {
    let i: number = 0;
    let j: number = 0;

    for (let i = 0; i < n+m; i++) {
        if (i >= m+j || nums2[j] < nums1[i]) {
            nums1.splice(i, 0, nums2[j]);
            nums1.pop();
            j++;
        }
    }
};