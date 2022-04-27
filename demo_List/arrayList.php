<?php
class ArrayList
{
    public array $container;
    public int $limit;
    public function __construct($limit)
    {
        $this->container = [];
        $this->limit = $limit;
    }
    public function add($item)
    {
        //kiem tra danh sach day chua 
        if (! $this->isFull()) {
            array_push($this->container, $item);
        }else {
            echo "danh sach day";
        }
        
    }
    //xoa vi tri can xoa tham so vi tri can xoa
    // kiem tra vi triphan tu co trong mang khong unset

    public function remove($index)
    {
        if (array_key_exists($index, $this->container)) {
            unset($this->container[$index]);
        }else {
            echo "khong ton tai vi tri".$index;
        }
    }
    public function update($index,$item){
        //kiem tra vi triphan tu co trong mang khong
        // dung
        if (array_key_exists($index, $this->container)) {
            //cap nhat lai vi tri ptu index bang  gia  tri moi ttruyen vao
          $this->container[$index]=$item;
        }else {
            echo "khong ton tai vi tri".$index."<br>";
        }
    }
    //tra ve ca phan tu trong mang
    public function size(){
        return count($this->container);
    }
    public function isFull(){
        return $this->size()==$this->limit;
    }
    public function getByIndex($index){
        if (array_key_exists($index, $this->container)) {
         return $this->container[$index];
        }else {
            echo "khong ton tai vi tri".$index."<br>";
        }
    }
}
$array=new ArrayList(2);

$array->add(5);
$array->add(6);
echo "<pre>";
var_dump($array->container);
$array->getByIndex(1);
//update
echo"---------update--------<br>";
$array->update(1,8);
var_dump($array->container);
echo"---------remove--------<br>";
$array->remove(1);
var_dump($array->container);