class Solution:
    def canPlaceFlowers(self, flowerbed: List[int], n: int) -> bool:
        if n == 0:
            return True
        length = len(flowerbed)
        for i in range(length):
            if flowerbed[i] == 0 and (0 if i == 0 else flowerbed[i - 1]) == 0 and (0 if i == length-1 else flowerbed[i + 1]) == 0:
                flowerbed[i] = 1
                n -= 1
                if n == 0:
                    return True
        
        return False
