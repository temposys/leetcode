# Last updated: 14/09/2025, 17:32:50
class Solution:
    def averageWaitingTime(self, customers: List[List[int]]) -> float:
        totalWaiting = 0
        endTime = 0
        for orderTime, timeToCook  in customers:
            endTime = (endTime if endTime > orderTime else orderTime) + timeToCook
            totalWaiting += endTime - orderTime

        return totalWaiting / len(customers)