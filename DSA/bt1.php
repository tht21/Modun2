<?php
class Patient
{
    public $code;
    public $name;
    public function __construct($code, $name)
    {
        $this->code = $code;
        $this->name = $name;
    }
}
class Queue
{
    private $listData;

    public function __construct()
    {
        $this->listData = [];
        $this->examineds = [];
    }

    function addPatient($code, $name)
    {
        $patient = new Patient($code, $name);
        array_push($this->listData, $patient);
    }
    // uu tien theo ma
    function sort()
    {
        function my_sort($codes, $names)
        {
            if ($codes->code == $names->code) return 1;
            return ($codes->code > $names->code) ? 1 : -1;
        }
        //dùng để sặp xếp một mảng dựa vào hàm so sánh do người dùng định nghĩa
        // hàm so sánh.
        usort($this->listData, "my_sort");
    }
//
    function dequeue()
    {
        $result = array_shift($this->listData);
        array_push($this->examineds, $result);
    }

    function toString()
    {
        return $this->listData;
    }
    // function patient(){
    //      $a = $this->sort();
    //      return $a;
    // }

}

$queue = new Queue();
$queue->addPatient(5, "Smith");
$queue->addPatient(4, "Jones");
$queue->addPatient(6, "Fehrenbach");
$queue->addPatient(0, "Brown");
$queue->addPatient(1, "Ingram");
echo "uu tien theo code <hr>";
//sap xep moi hien thi
$queue->sort();
echo "<pre>";
print_r($queue);
//uu tien 2 nguoi
$queue->dequeue();
$queue->dequeue();
echo "danh sach da kham<hr>";
// print_r($queue->toString());
print_r($queue);
echo "</pre>";
