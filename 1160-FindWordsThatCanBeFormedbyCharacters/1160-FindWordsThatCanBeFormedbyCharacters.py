# Last updated: 12/05/2025, 18:36:55
class Solution:
    def countCharacters(self, words: List[str], chars: str) -> int:
        correct = ''
        
        for word in words:
            use = True
            curMap = list(chars)
            for i in word:
                if i not in curMap:
                    use = False
                    break
                curMap.remove(i)
            if use == True:
                correct += word
        
        return len(correct)