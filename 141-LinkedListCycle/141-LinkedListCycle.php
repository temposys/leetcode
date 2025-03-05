/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */

class Solution {
    /**
     * @param ListNode $head
     * @return Boolean
     */
    function hasCycle($head) {
        if (!$head) return false;

        $slow = $head;
        $fast= $head;
        while($fast != null && $fast->next != null){
            $slow = $slow->next;
            $fast = $fast->next->next;
            // var_dump($slow->val, $fast->val);
            if($fast===$slow){
                return true;
            }
        }

        // $visited = [
        //     spl_object_id($head) => true,
        // ];

        // $current = $head;
        // while ($current = $head->next) {
        //     if (isset($visited[spl_object_id($current)])) {
        //         return true;
        //     }
        //     $visited[spl_object_id($current)] = true;
        //     $head = $current;
        // }

        return false;
    }
}