# Last updated: 08/05/2025, 13:43:44
class Solution:
    def compress(self, chars: List[str]) -> int:
        count = 0
        prev = ''
        n = len(chars)

        def addS(chars, count, prev):
            chars.append(prev)
            if count > 1: 
                for s in str(count):
                    chars.append(s)
            return

        for i in range(n):
            char = chars[i]
            if char == prev:
                count += 1
            else:
                if prev != '':
                    addS(chars, count, prev)
                prev = char
                count = 1

        addS(chars, count, prev)
        chars[:] = chars[n:]

        return len(chars)