# Last updated: 06/09/2025, 20:39:03
class Solution:
    def hasGroupsSizeX(self, deck: List[int]) -> bool:
        if len(deck) == 1: return False
        counter = Counter(deck)
        values = set(counter.values())

        return reduce(gcd, values) >= 2