# Last updated: 31/01/2026, 12:28:39
1class Solution:
2    def nextGreatestLetter(self, letters: List[str], target: str) -> str:
3        letters.append(target)
4        counter = Counter(letters)
5        uchars = set(counter.keys())
6
7        uchars = sorted(uchars, reverse = False)
8
9        if uchars[-1] == target: return letters[0]
10        
11        for k,v in enumerate(uchars):
12            if v == target: return uchars[k+1]
13
14        return letters[0]