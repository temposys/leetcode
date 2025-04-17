// Last updated: 16/04/2025, 17:42:09
class Node {
    public int $key;
    public int $value;
    public ?Node $prev;
    public ?Node $next;

    public function __construct(int $key, int $value, $prev = null, $next = null) {
        $this->key = $key;
        $this->value = $value;
        $this->prev = $prev;
        $this->next = $next;
    }
}

class LRUCache {
    private $capacity;
    private array $map;
    private Node $head;
    private Node $tail;

    /**
     * @param Integer $capacity
     */
    function __construct($capacity) {
        $this->capacity = $capacity;
        $this->map = [];
        $this->head = new Node(-1, -1);
        $this->tail = new Node(-1, -1);
        $this->head->next = $this->tail;
        $this->tail->prev = $this->head;
    }
  
    /**
     * @param Integer $key
     * @return Integer
     */
    function get($key) {
        if (!isset($this->map[$key])) {
            return -1;
        }
        $node = $this->map[$key];
        $this->remove($node);
        $this->add($node);

        return $node->value;
    }
  
    /**
     * @param Integer $key
     * @param Integer $value
     * @return NULL
     */
    function put($key, $value) {
        // remove previously saved Node
        if (isset($this->map[$key])) {
            $this->remove($this->map[$key]);
        };

        // add a new Node
        $node = new Node($key, $value);
        $this->map[$key] = $node;
        $this->add($node);

        if (count($this->map) > $this->capacity) {
            // remove the head
            $nodeToDelete = $this->head->next;
            $this->remove($nodeToDelete);
            unset($this->map[$nodeToDelete->key]);
        }
    }

    function remove(Node $node) {
        $node->prev->next = $node->next;
        $node->next->prev = $node->prev;
    }

    function add(Node $node) {
        $prev = $this->tail->prev;
        $prev->next = $node;
        $node->prev = $prev;
        $node->next = $this->tail;
        $this->tail->prev = $node;
    }
}

/**
 * Your LRUCache object will be instantiated and called as such:
 * $obj = LRUCache($capacity);
 * $ret_1 = $obj->get($key);
 * $obj->put($key, $value);
 */