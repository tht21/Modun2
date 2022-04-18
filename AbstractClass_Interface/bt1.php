<?php
abstract class Animal
{//phuong thuc
    abstract public function makeSound();
}
class Tiger extends Animal
{
    public function makeSound(): string
    {
        return "Tiger: roarrrrr!";
    }
}
class Chicken extends Animal
{
    public function makeSound(): string
    {
        return "Chicken: cluck-cluck!";
    }
}
echo('---- Animals<br>');
$animals[0] = new Tiger();
$animals[1] = new Chicken();

foreach ($animals as $animal) {
    echo $animal->makeSound() . '<br>';
}
