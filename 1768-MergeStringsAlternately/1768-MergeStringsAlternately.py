class Solution:
    def mergeAlternately(self, word1: str, word2: str) -> str:
        len1 = len(word1)
        len2 = len(word2)
        
        minLength = min(len1, len2)
        result = ''
        for i in range(minLength):
            result += word1[i] + word2[i]
        
        return result + (word1[i+1:] if len1 > len2 else word2[i+1:])