<?php

class Dog {
    private $sex = 'male';
}

$dogs_bark = function(Dog $dog){
    return $dog->sex;
};

$dog = new Dog;

$dogs_bark = Closure::bind($dogs_bark, null, $dog);

echo $dogs_bark($dog);