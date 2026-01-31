# Last updated: 31/01/2026, 12:36:28
class Solution:
    def nextGreatestLetter(self, letters: List[str], target: str) -> str:
        start = 0
        end = len(letters)

        while start< end:
            mid = (start+end)//2
            if letters[mid] > target:
                end = mid
            else:
                start = mid+1
        if start>= len(letters):
            return letters[0]
        else:
            return letters[start]