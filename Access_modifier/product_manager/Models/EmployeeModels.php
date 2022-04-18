<?php

namespace Models;

class Employee
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
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setDatetime($datetime)
    {
        $this->datetime = $datetime;
    }
    public function getDatetime()
    {
        return $this->datetime;
    }
    public function setAddress($address)
    {
        $this->address = $address;
    }
    public function getAddress()
    {
        return $this->address;
    }
    public function setPosition($position)
    {
        $this->position = $position;
    }
    public function getPosition()
    {
        return $this->position;
    }
}
