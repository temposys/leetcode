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
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2) {
        if (is_null($l1) && is_null($l2)) {
            return null;
        }

        $sum = (is_null($l1) ? 0 : $l1->val) + (is_null($l2) ? 0 : $l2->val);

        if ($sum >= 10) {
            $sum -= 10;
            if (is_null($l1->next)) {
                $l1->next = new ListNode(1);
            } else {
                ++$l1->next->val;
            }
        }
        
        return new ListNode($sum, $this->addTwoNumbers($l1->next, $l2->next));
    }
}