# Last updated: 26/04/2025, 16:10:48
class Solution(object):
    def minRemoveToMakeValid(self, s):
        """
        :type s: str
        :rtype: str
        """
        stack = []
        remove = []
        arr = list(s)

        for i, char in enumerate(arr):
            if char in "()":
                if char == '(':
                    stack.append(i)
                elif stack:
                    stack.pop()
                else:
                    remove.append(i)
        remove.extend(stack)
        
        res = ''
        for i, char in enumerate(arr):
            res += char if i not in remove else ""

        return res