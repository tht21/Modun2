<?PHP
 
class Queue
{
    protected $queue;

    public function __construct()
    {
        $this->queue = [];
    }

    public function isEmpty()
    {
        return count($this->queue) == 0;
    }

    public function enqueue($character)
    {
        array_push($this->queue, $character);
    }

    public function dequeue()
    {
        if (!$this->isEmpty()) {
        return array_shift($this->queue);
        } else {
            throw new Exception('Array is Empty!');
        }
    }
}

class Stack
{
    protected $stack;
    protected $limit;

    public function __construct($limit)
    {
        $this->stack = [];
        $this->limit = $limit;
    }
    public function isEmpty()
    {
        return empty($this->stack);
    }
    public function isFull() {
        return count($this->stack) == $this->limit;
    }

    public function push($character)
    {
        if (!$this->isFull()) {
            array_push($this->stack, $character);
        } else {
            throw new Exception('Array is full!!');
        }
    }
    public function pop() {
        if (!$this->isEmpty()) {
            return array_pop($this->stack);
        } else {
            throw new Exception('Array is empty!!');
        }
    }
}

function checkSymmetry($string) {
    // $queue = new Queue();
    // $stack = new Stack(100);
    // //  strlen Tính kích thước của một chuỗi
    // //
    // for ($i = 0; $i < strlen($string); $i++) {
    //     $queue->enqueue($string[$i]);
    //     $stack->push($string[$i]);
    // }
    // $count = 0;
    // $halfString = floor(strlen($string) / 2);
    // for ($i = 0; $i < $halfString; $i++) {
    //     if ($queue->dequeue() != $stack->pop()) {
    //         break;
    //     } else {
    //         $count++;
    //     }
    // }
    // if ($count == $halfString) {
    //     echo "String is symmetric.";
    // } else {
    //     echo "String isn't symmetric.";
    // }
    $stack = new Stack(strlen($string));
    $queue = new Queue(strlen($string));

    for ($i = 0; $i < strlen($string); $i++) {
        $stack->push(substr($string, $i, 1));
        $queue->enqueue(substr($string, $i, 1));
    }

    while (!$stack->isEmpty()) {
        if ($stack->pop() != $queue->dequeue()) {
            die("Symmetrical in't  string!");
        }
    }
    die ("Symmetrical string!");
}
checkSymmetry("able was I ere I saw elbaaaaaa");


