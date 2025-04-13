// Last updated: 12/04/2025, 20:53:21
/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {

    /**
     * @param ListNode $head
     * @return ListNode
     */
    function swapPairs($head) {
        if (!$head || !$head->next) {
            return $head;
        }

        $home = $head->next;

        $end = $head;

        while ($head->next) {
            $aux = $head->next;
            $end->next = $aux;
            $head->next = $aux->next;

            $aux->next = $head;
            $end = $head;
            $head = $head->next;
        }

        return $home;
    }
}