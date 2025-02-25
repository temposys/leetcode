function maxVowels(s: string, k: number): number {
  const vowel = new Set(["a", "e", "i", "o", "u"]);
  let ans = 0;
  let count = 0;
  let l = 0;
  for (let r = 0; r < s.length; r++) {
    if (vowel.has(s[r])) {
      count += 1;
    }
    if (r - l + 1 > k) {
      if (vowel.has(s[l])) count -= 1;
      l++;
    }
    ans = Math.max(ans, count);
  }
  return ans;
}
