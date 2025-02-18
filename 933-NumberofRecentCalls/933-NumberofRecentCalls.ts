// Last updated: 17/02/2025, 20:43:52
class RecentCounter {
    private queue: number[] = [];

    constructor() {}

    ping(t: number): number {
        this.queue.push(t);
        const minTime = t - 3000;

        while (this.queue[0] < minTime) {
            this.queue.shift();
        }
        
        return this.queue.length;
    }
}

/**
 * Your RecentCounter object will be instantiated and called as such:
 * var obj = new RecentCounter()
 * var param_1 = obj.ping(t)
 */