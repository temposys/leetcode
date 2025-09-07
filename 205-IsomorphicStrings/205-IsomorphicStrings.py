# Last updated: 06/09/2025, 19:53:43
class Solution:
    def wordPattern(self, pattern: str, s: str) -> bool:
        arr = s.split(' ')
        if len(arr) != len(pattern): return False
        mapP = {}
        setS = set()
    
        for i in range(0, len(pattern)):
            if (
                (pattern[i] in mapP and mapP[pattern[i]] != arr[i]) 
                or (pattern[i] not in mapP and arr[i] in setS)
            ): return False
            mapP[pattern[i]] = arr[i]
            setS.add(arr[i])

        return True