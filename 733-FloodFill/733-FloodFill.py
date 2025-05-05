# Last updated: 05/05/2025, 16:09:27
class Solution:
    def fill(self, image, i, j, color, cur):
        if i < 0 or i >= len(image) or j < 0 or j >= len(image[0]) or image[i][j] != cur:
            return

        image[i][j] = color
        self.fill(image, i + 1, j, color, cur)
        self.fill(image, i - 1, j, color, cur)
        self.fill(image, i, j + 1, color, cur)
        self.fill(image, i, j - 1, color, cur)

    def floodFill(self, image: List[List[int]], sr: int, sc: int, color: int) -> List[List[int]]:
        if image[sr][sc] == color: return image

        self.fill(image, sr, sc, color, image[sr][sc])

        return image
