// Last updated: 13/04/2025, 17:47:16
class Solution {

    /**
     * @param Integer[][] $rooms
     * @return Boolean
     */
    function canVisitAllRooms($rooms) {
        $roomNum = count($rooms);

        $visited = array_fill(0, $roomNum, 0);

        $this->visit($visited, $rooms, 0); // DFS

        return !in_array(0, $visited);
    }

    function visit(&$visited, &$rooms, $key) {
        if ($visited[$key] === 1) {
            return;
        }

        $visited[$key] = 1;

        foreach ($rooms[$key] as $room) {
            $this->visit($visited, $rooms, $room);
        }

        return;
    }
}