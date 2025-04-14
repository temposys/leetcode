// Last updated: 13/04/2025, 17:52:07
class Solution {

    /**
     * @param Integer[][] $rooms
     * @return Boolean
     */
    function canVisitAllRooms($rooms) {
        $roomNum = count($rooms);

        $visited = [];

        $this->visit($visited, $rooms, 0); // DFS

        return count($visited) === $roomNum;
    }

    function visit(&$visited, &$rooms, $key) {
        if ($visited[$key]) {
            return;
        }

        $visited[$key] = true;

        foreach ($rooms[$key] as $room) {
            $this->visit($visited, $rooms, $room);
        }
    }
}