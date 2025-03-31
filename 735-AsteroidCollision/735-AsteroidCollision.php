// Last updated: 30/03/2025, 17:33:10
class Solution {

    /**
     * @param Integer[] $asteroids
     * @return Integer[]
     */
    function asteroidCollision($asteroids) {
        $stack = [];
        foreach ($asteroids as $asteroid) {
            $collision = false;
            while (!empty($stack) && end($stack) > 0 && $asteroid < 0) {
                $collision = true;
                if (end($stack) === abs($asteroid)) {
                    array_pop($stack);
                    break;
                } elseif (end($stack) < abs($asteroid)) {
                    $collision = false;
                    array_pop($stack);
                    continue;
                } else {
                    break;
                }
            }
            if (!$collision) {
                $stack[] = $asteroid;
            }

        }

        return $stack;
    }
}