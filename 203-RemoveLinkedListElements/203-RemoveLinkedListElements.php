// Last updated: 12/04/2025, 12:25:21
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
        while ($head && $head->val === $val) {
            $head = $head->next;
        }

        $cur = $head;
        while($cur && $cur->next) {
            if ($cur->next->val === $val) {
                $cur->next = $cur->next->next;
            } else {
                $cur = $cur->next;
            }
        }

        return $head;
    }
}