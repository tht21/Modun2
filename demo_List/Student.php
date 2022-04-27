<?PHP
class ListStudent
{
    public String $name;
    public int $score;
    public $next;

    public function __construct($name, $score)
    {
        $this->name = $name;
        $this->score = $score;
        $this->next = null;
    }
    function readNode()
    {
        return $this->name . $this->score;
    }
    function getScore()
    {
        return $this->score;
    }
    function getName(){
        return $this->name;
    }

}
class LinkedListStudent
{
    //luu lai gia tri
    public $first;
    public $last;
    public $count;
    public $max;
    function __construct()
    {
        $this->first;
        $this->last;
        $this->count = 0;
    }
    //insertFirst() để thêm một nút vào đầu danh sách.
    public function insertFirst($item, $score)
    {
        $list = new ListStudent($item, $score);
        $list->next = $this->first;
        $this->first = $list;
        if ($this->last == NULL) {
            $this->last = $list;
        }
        if ($list->score <= 5) {
            $this->count++;
        }
    }
    //insertLast() để thêm một nút vào cuối danh sách.
    public function insertLast($item, $score)
    {
        $link = new ListStudent($item, $score);
        if ($this->first != NULL) {
            $this->last->next = $link;
            $link->next = NULL;
            $this->last = $link;
        } else {
            $this->insertFirst($item, $score);
        }
        if ($link->score <= 5) {
            $this->count++;
        }
    }

    public function showList()
    {
        $listData = [];
        $current = $this->first;

        while ($current != NULL) {
            array_push($listData, $current->readNode());
            $current = $current->next;
        }

        return $listData;
    }
    public function totalStudentsFail()
    {
        return $this->count;
    }
    public function listStudentMaxScore($score)
    {
        // $ar=[];
        $maxData = [];
        $current = $this->first;
        while ($current != NULL) {
            array_push($maxData,$current->getScore(), $current->getScore());
            $current = $current->next;
        }
       
        $max =  $maxData[0];
    //    for ($i = 0; $i < count($maxData); $i++) {
        //     if ($maxData[$i] > $max) {
        //         $max = $maxData[$i];
        //     }
        // }
        foreach ($maxData as $key) {
            if ($maxData[$key] > $max) {
                        $max = $maxData[$key];
                    }
        }
        return $max;
    }
    public function findByName($name)
    {
        //   $a=[];
        $current = $this->first;

        while ($current->name != $name) {
            if ($current->next == NULL)
                // break;
                return "ten khong ton tai";
            else
                $current = $current->next;
        }
        return $current;
    }
    public function sortName()
    {
        $current = $this->first;
        $Data = [];
        $current = $this->first;
        while ($current != NULL) {
            array_push($Data, $current->readNode());
            $current = $current->next;
        }
        sort($Data);
        return $Data;
    }
     
}
$object = new LinkedListStudent();
$object->insertFirst("hai", 9);
$object->insertFirst("nam  ", 7);
$object->insertFirst("ban ", 5);
$object->insertFirst("linh ", 17);
$object->insertLast("kiet", 9);
$object->insertLast("vung",10);
$object->insertLast("vui", 5);
echo "<pre>";
print_r($object);
echo "<br> hien thi danh dach<hr>";
print_r($object->showList());
echo "<hr> trong danh sách có bao nhiêu sinh viên thi lai<br>";
echo $object->totalStudentsFail();
echo " <hr>max sinh viên<br>";
print_r($object->listStudentMaxScore(7));
echo " <hr>tim kiem<br>";
print_r($object->findByName("nam"));
echo "<br> hien thi danh dach<hr>";
print_r($object->sortName());
// echo $object->readNode(3);