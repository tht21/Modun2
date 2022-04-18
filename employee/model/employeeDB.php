<?php
namespace Model;
class EmployeeDB
{
    private String $name;
    private String $datetime;
    private String $address;
    private String $position;
    public function __construct($name, $datetime, $address, $position)
    {
        $this->name = $name;
        $this->datetime = $datetime;
        $this->address = $address;
        $this->position = $position;
    }
   
}
