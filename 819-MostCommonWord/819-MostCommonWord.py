# Last updated: 07/05/2025, 18:28:20
class Solution:
    def mostCommonWord(self, paragraph: str, banned: List[str]) -> str:
        paragraph = re.sub(r"[^a-z0-9 ]", ' ', paragraph.lower())
        paragraph = ' '.join(paragraph.split())
        pList = paragraph.split(" ")

        for ban in banned:
            pList = [x for x in pList if x != ban]

        return Counter(pList).most_common(1)[0][0]