// Last updated: 30/03/2025, 17:00:34
class Solution {

    /**
     * @param Integer[] $asteroids
     * @return Integer[]
     */
    function asteroidCollision($asteroids) {
        $stack = [$asteroids[0]];
        for ($i = 1; $i < count($asteroids); $i++) {
            $collision = $this->collision(array_pop($stack), $asteroids[$i]);
            while (count($collision) === 1 && count($stack) > 0) {
                $collision = $this->collision(array_pop($stack), $collision[0]);
            }
            $stack = array_merge($stack, $collision);

        }

        return $stack;
    }

    function collision($first, $second) {
        if ($first === null) {
            return [$second];
        }

        if ($first > 0 && $second < 0) {
            if (abs($first) === abs($second)) {
                return [];
            } elseif (abs($first) < abs($second)) {
                return [$second];
            } else {
                return [$first];
            }
        } 

        return [$first, $second];
    }
}