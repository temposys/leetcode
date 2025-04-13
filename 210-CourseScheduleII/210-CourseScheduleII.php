// Last updated: 13/04/2025, 16:29:56
class Solution {

    /**
     * @param Integer $numCourses
     * @param Integer[][] $prerequisites
     * @return Integer[]
     */
    function findOrder($numCourses, $prerequisites) {
        if (empty($prerequisites)) {
            return range(0, $numCourses - 1);
        }

        $graph = [];
        $inDegree = array_fill(0, $numCourses, 0);
        $queue = [];
        $ordering = [];

        foreach ($prerequisites as $pair) {
            [$course, $prerequisite] = $pair;

            $graph[$prerequisite][] = $course;
            $inDegree[$course]++;
        }

        for ($i = 0; $i < $numCourses; $i++) {
            if ($inDegree[$i] === 0) {
                $queue[] = $i;
            }
        }

        // BFS
        while (!empty($queue)) {
            $course = array_shift($queue);
            $ordering[] = $course;

            if (isset($graph[$course])) {
                foreach ($graph[$course] as $neighbor) {
                    $inDegree[$neighbor]--;
                    if ($inDegree[$neighbor] === 0) {
                        $queue[] = $neighbor;
                    }
                }
            }
        }

        return (count($ordering) === $numCourses) ? $ordering : [];
    }
}