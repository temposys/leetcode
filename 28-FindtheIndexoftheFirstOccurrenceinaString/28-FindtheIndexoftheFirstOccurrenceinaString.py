# Last updated: 25/04/2025, 12:10:46
class Solution(object):
    def strStr(self, haystack, needle):
        """
        :type haystack: str
        :type needle: str
        :rtype: int
        """
        lenH = len(haystack)
        lenN = len(needle)

        if lenH < lenN: return -1
        for i in range(lenH - lenN + 1):
            if haystack[i : i + lenN] == needle: return i
        
        return -1