# Last updated: 30/04/2025, 08:45:48
class Solution:
    def isAnagram(self, s: str, t: str) -> bool:
        return Counter(s) == Counter(t)