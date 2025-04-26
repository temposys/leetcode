# Last updated: 26/04/2025, 16:16:03
class Solution(object):
    def minRemoveToMakeValid(self, s):
        """
        :type s: str
        :rtype: str
        """
        stack = deque()
        arr = list(s)

        for i, char in enumerate(arr):
            if char in "()":
                if char == '(': stack.append(i)
                elif stack: stack.pop()
                else: arr[i] = ''

        while stack:
            i = stack.pop()
            arr[i] = ''

        return ''.join(arr)