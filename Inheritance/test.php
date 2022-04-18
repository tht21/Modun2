<?php
class Animal
{
    public function say()
    {
        echo "nói điều gì";
    }
}
class Cat extends Animal
{
    public function say()
    {
        echo "meo meo<br>";
    }
}
class Dog extends Animal
{
    public function say()
    {
        echo "go go";
        parent::say();
    }
}
$cat = new Cat();
$cat->say();
$dog = new Dog();
$dog->say();
