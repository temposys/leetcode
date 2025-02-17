// Last updated: 16/02/2025, 21:00:07
function maxArea(height: number[]): number {
    let left: number = 0;
    let right: number = height.length - 1;
    let result: number = 0;
    while (right > left) {
        result = Math.max(Math.min(height[right], height[left]) * (right - left), result);
        
        if (height[left] < height[right]) {
            left++;
        } else {
            right--;
        }
    }

    return result;
};