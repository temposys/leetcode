# Last updated: 30/04/2025, 08:44:08
class Solution:
    def isAnagram(self, s: str, t: str) -> bool:
        return sorted(s) == sorted(t)