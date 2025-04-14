// Last updated: 13/04/2025, 17:51:13
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
        if ($visited[$key] === 1) {
            return;
        }

        $visited[$key] = 1;

        foreach ($rooms[$key] as $room) {
            $this->visit($visited, $rooms, $room);
        }
    }
}