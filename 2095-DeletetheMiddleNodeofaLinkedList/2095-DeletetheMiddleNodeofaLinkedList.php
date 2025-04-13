// Last updated: 12/04/2025, 20:30:51
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
    function deleteMiddle($head) {
        if (!$head || !$head->next) {
            return null;
        }

        $previous = null;
        $slower = $head;
        $faster = $head;

        while ($faster && $faster->next) {
            $previous = $slower;
            $slower = $slower->next;
            $faster = $faster->next->next;
        }

        $previous->next = $slower->next;

        return $head;
    }
}