// Last updated: 30/03/2025, 18:00:41
class Solution {

    /**
     * @param Integer[] $asteroids
     * @return Integer[]
     */
    function asteroidCollision($asteroids) {
        $stack = [];
        foreach ($asteroids as $asteroid) {
            $crush = 1;
            while ($crush > 0 && $asteroid < 0 && !empty($stack) && end($stack) > 0) {
                /*
                Spaceship (<=>) for save separated info about crush
                -1 for convert negative int to positive
                (0 - is both crush, 1 - is current asteroid crush, -1 - is stack asteroid crush)
                */
                $crush = abs($asteroid) <=> end($stack);
                if ($crush >= 0) { 
                    array_pop($stack); 
                }
            }
            if ($crush > 0) {
                array_push($stack, $asteroid);
            }
        }
        return $stack;
    }
}