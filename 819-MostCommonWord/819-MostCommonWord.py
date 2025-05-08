# Last updated: 07/05/2025, 18:31:34
class Solution:
    def mostCommonWord(self, paragraph: str, banned: List[str]) -> str:
        pList = re.findall(r'\w+', paragraph.lower())

        for ban in set(banned):
            pList = [x for x in pList if x != ban]

        return Counter(pList).most_common(1)[0][0]