# Last updated: 06/09/2025, 18:56:53
class Solution:
    def isIsomorphic(self, s: str, t: str) -> bool:
        # map1 = []
        # map2 = []
        # for char in s:
        #     map1.append(s.index(char))
        # for char in t:
        #     map2.append(t.index(char))

        # return map1 == map2

        if len(s) != len(t): return False

        map1 = {}
        map2 = {}
        for i in range(0, len(s)):
            if (
                (s[i] in map1 and map1[s[i]] != t[i])
                or (t[i] in map2 and map2[t[i]] != s[i])
            ): return False
            map1[s[i]] = t[i]
            map2[t[i]] = s[i]
        
        return True