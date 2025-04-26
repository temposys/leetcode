# Last updated: 26/04/2025, 14:33:47
class Solution:
    def canConstruct(self, ransomNote: str, magazine: str) -> bool:
        l = list(magazine)

        for s in ransomNote:
            if s in l: l.remove(s)
            else: return False
        
        return True