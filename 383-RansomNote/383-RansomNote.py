# Last updated: 26/04/2025, 14:45:22
class Solution:
    def canConstruct(self, ransomNote: str, magazine: str) -> bool:
        mMap = Counter(magazine)
        rMap = Counter(ransomNote)

        for char in rMap:
            if char not in mMap or mMap[char] < rMap[char]:
                return False

        return True