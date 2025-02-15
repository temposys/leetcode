/** 
 * The API guess is defined in the parent class.
 * @param  num   your guess
 * @return 	     -1 if num is higher than the picked number
 *			      1 if num is lower than the picked number
 *               otherwise return 0
 * public function guess($num){}
 * 25 min
 */

class Solution extends GuessGame {
    /**
     * @param  Integer  $n
     * @return Integer
     */
    function guessNumber($n) {
        $start = 0;
        $end = $n;
        $num = rand($start, $end);
        return  $this->returnNumber($num, $start, $end);
    }

    function returnNumber($num, $start, $end)
    {
        $guessRes = $this->guess($num);
        if ($guessRes === 0) {
            return $num;
        }

        if ($guessRes === -1) {
            $end = $num;
        } else {
            $start = $num;
        }

        return $this->returnNumber(rand($start, $end), $start, $end);
    }
}