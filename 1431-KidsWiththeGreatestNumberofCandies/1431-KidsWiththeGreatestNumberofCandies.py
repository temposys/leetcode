class Solution:
    def kidsWithCandies(self, candies: List[int], extraCandies: int) -> List[bool]:
        result = []
        maxValue = max(candies)
        for i, x in enumerate(candies):
            result.append(True if (x + extraCandies) >= maxValue else False)

        return result
      
