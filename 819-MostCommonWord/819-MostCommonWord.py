# Last updated: 07/05/2025, 18:33:56
class Solution:
    def mostCommonWord(self, paragraph: str, banned: List[str]) -> str:
        pList = re.findall(r'\w+', paragraph.lower())

        for ban in set(banned):
            pList = [x for x in pList if x != ban]

        return max(Counter(pList), key=Counter(pList).get)