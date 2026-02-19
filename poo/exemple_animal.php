<?php

abstract class Animal 
{
    public abstract function makeSound():void;
}
class Dog extends Animal 
{
    public function makeSound():void {

        echo "Le chien aboie";
    }
}
class Cat extends Animal 
{
    public function makeSound():void {
        echo "Le chat miaule";
    }
}

class Horse extends Animal 
{
    public function makeSound():void {
        echo "Le cheval hennit";
    }
}

$animal = new Animal();
