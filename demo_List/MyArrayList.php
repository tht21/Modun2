<?php
class MyArrayList
{
    public $arrayList;
    public function __construct(){
        $this->arrayList = [];
}
    public function add($item)
    {
        array_push($this->arrayList, $item);
    }
    public function addAtpost($item, $index)
    {
        array_splice($this->arrayList, $index, 0, $item);
    }
    //xoa 1 ptu tai index
    public function removeByIndex($index)
    {
        if (array_key_exists($index, $this->arrayList)) {
            unset($this->arrayList[$index]);
        }
    }
    ////tim kiem ptu 
    public function contains($item)
    {
        foreach ($this->arrayList as $key => $value) {
            if ($value == $item) {
                return $key;
            }
        }
    }
    //tra ve gia tri chi dinh index
    public function get($index)
    {
        return $this->arrayList[$index];
    }
    //Trả về một mảng chứa tất cả các phần tử trong danh sách này theo đúng thứ tự

    public function  toArray()
    {
        return $this->arrayList;
    }
    //tra ve ptu trong danh sanh
    function size()
    {
        return count($this->arrayList);
    }
    //kiem tra danh sanh khong co ptu nao
    function isEmpty()
    {
        if (count($this->arrayList) == 0) {
            return true;
        }
        return false;
    }
    function shiftItemUp($Start, $End)
    {
    }
    function shiftItemDown()
    {
    }
}
$arrayList = new MyArrayList();
$arrayList->add(5);
echo "<pre>";
var_dump($arrayList->arrayList);
