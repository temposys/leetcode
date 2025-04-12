// Last updated: 12/04/2025, 12:19:17
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
     * @param Integer $val
     * @return ListNode
     */
    function removeElements($head, $val) {
        $newHead = new ListNode();
        $newCur = $newHead;
        $cur = $head;
        while($cur !== null) {
            if ($cur->val !== $val) {
                $newCur->next = new ListNode($cur->val); 
                $newCur = $newCur->next;
            }
            $cur = $cur->next;
        }

        return $newHead->next;
    }
}