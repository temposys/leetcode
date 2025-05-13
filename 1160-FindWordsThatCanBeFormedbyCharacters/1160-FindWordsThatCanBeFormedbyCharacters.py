# Last updated: 12/05/2025, 18:42:42
class Solution:
    def countCharacters(self, words: List[str], chars: str) -> int:
        res = 0
        
        for word in words:
            isCorrect = True
            for i in word:
                if word.count(i) > chars.count(i):
                    # wrong word
                    isCorrect = False
                    break
            if isCorrect:
                res += len(word)
        
        return res