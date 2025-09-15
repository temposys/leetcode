# Last updated: 14/09/2025, 17:30:30
class Solution:
    def averageWaitingTime(self, customers: List[List[int]]) -> float:
        totalWaiting = 0
        endTime = 0
        for customer in customers:
            orderTime, timeToCook = customer
            startTime = endTime if endTime > orderTime else orderTime
            endTime = startTime + timeToCook
            waitingTime = endTime - orderTime
            totalWaiting += waitingTime

        return totalWaiting / len(customers)