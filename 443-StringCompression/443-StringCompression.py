# Last updated: 08/05/2025, 13:39:16
class Solution:
    def compress(self, chars: List[str]) -> int:
        count = 0
        s = ""
        prev = ''
        n = len(chars)

        def addS(s, count, prev):
            s += prev
            if count > 1: s += str(count)
            return s

        for char in chars:
            if char == prev:
                count += 1
            else:
                if prev != '':
                    s = addS(s, count, prev)
                prev = char
                count = 1

        s = addS(s, count, prev)
        
        for i in s:
            chars.append(i)

        chars[:] = chars[n:]

        return len(chars)