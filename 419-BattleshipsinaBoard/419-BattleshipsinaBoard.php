class Solution {

    /**
     * @param String[][] $board
     * @return Integer
     */
    function countBattleships($board) {
        $sheeps = 0;
        $rows = count($board[0]);

        for ($i = 0; $i < count($board); $i++) {
            for ($j = 0; $j < $rows; $j++) {
                if ($board[$i][$j] === 'X') {
                    $sheeps++;
                    $this->findWholeSheep($board, $i, $j);
                }
            }
        }

        return $sheeps;
    }

    function findWholeSheep(&$board, $i, $j) {
        $board[$i][$j] = '.';
        $k = 1;
        if ($board[$i + $k][$j] === 'X') {
            while ($board[$i + $k][$j] === 'X') {
                $board[$i + $k][$j] = '.';
                $k++;
            }
        } else {
            while ($board[$i][$j + $k] === 'X') {
                $board[$i][$j + $k] = '.';
                $k++;
            }
        }
    }
}