# Last updated: 08/05/2025, 14:08:49
class Solution:
    def closeStrings(self, word1: str, word2: str) -> bool:
        def getList(text):
            return sorted(Counter(text).values())

        if set(word1) != set(word2):
            return False

        return getList(word1) == getList(word2)