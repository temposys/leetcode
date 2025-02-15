// 15 min
function maxProfit(prices: number[]): number {
    let min: number = null;
    let profit: number = 0;

    for (let i = 0; i < prices.length; i++) {
        if (min === null || prices[i] < min) {
            min = prices[i];
        } else {
            profit = Math.max(profit, prices[i] - min);
        }
    };

    return profit;
};