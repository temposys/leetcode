// Last updated: 30/03/2025, 17:30:07
class Solution {

    /**
     * @param Integer[] $asteroids
     * @return Integer[]
     */
    function asteroidCollision($asteroids) {
        $stack = [$asteroids[0]];
        for ($i = 1; $i < count($asteroids); $i++) {
            $collision = false;
            while (!empty($stack) && end($stack) > 0 && $asteroids[$i] < 0) {
                $collision = true;
                if (end($stack) === abs($asteroids[$i])) {
                    array_pop($stack);
                    break;
                } elseif (end($stack) < abs($asteroids[$i])) {
                    $collision = false;
                    array_pop($stack);
                    continue;
                } else {
                    break;
                }
            }
            if (!$collision) {
                $stack[] = $asteroids[$i];
            }

        }

        return $stack;
    }
}