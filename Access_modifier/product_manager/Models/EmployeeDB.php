<?php
namespace Models;
use PDO;
class EmployeeDB{
 //lấy tất cả kết quả
 public function getAll(){
    global $connect;
    $sql = "SELECT * FROM employee";
    $stmt = $connect->query($sql);
    //Thiết lập kiểu dữ liệu trả về
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    //fetchALL se tra ve du lieu nhieu hon 1 ket qua
    $rows = $stmt->fetchAll();
    //Tra dữ liệu ve controller
    return $rows;
}

//lấy tất 1 kết quả dựa vào id
public function find($id){

}

//thêm mới dữ liệu
public function store($data){

}

//cập nhật dữ liệu theo id
public function update($id,$data){

}

//xóa dữ liệu
public function destroy($id){

}
}