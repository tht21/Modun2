<?php
class User
{
    protected String $name;
    protected String $email;
    public int $role;
    public function __construct(){
    }
    public function setName($name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setRole($role){
        $this->role = $role;
    }
    public function getRole(){
        return $this->role;
    }
    public function getInfo()
    {
        return $this->name . $this->email;
    }
    public function isAdmin()
    {
        if ($this->role == 1) {
            return "admin dang nhap";
        }
        if ($this->role == 2) {
            return "user dang nhap";
        }
    }
}
$user = new User();
$user->setName("hai");
$user->setEmail("hai");
$user->setRole(1);
echo $user->getInfo() . "<br>";
echo $user->isAdmin();
