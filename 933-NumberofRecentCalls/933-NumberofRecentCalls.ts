class RecentCounter {
    private requests: number[];

    constructor() {
        this.requests = [];
    }

    ping(t: number): number {
        this.requests.push(t);
        const minTime = t - 3000;

        if (this.requests.length === 0) {
            return 0;
        }

        let i = this.requests.length - 1;
        let result: number = 0;

        while (this.requests[i] >= minTime) {
            result++;
            i--;
        }
        
        return result;
    }
}

/**
 * Your RecentCounter object will be instantiated and called as such:
 * var obj = new RecentCounter()
 * var param_1 = obj.ping(t)
 */