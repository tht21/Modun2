<?php
namespace Controller;
include_once "../Models/EmployeeDB.php";


class EmployeeController
{
    public function index()
    {
        $employees = $this->employeeDB->getAll();
        include '../view/list.php';
    }

    public function add()
    {
    }


    public function delete()
    {
    }

    public function edit()
    {
    }
}
