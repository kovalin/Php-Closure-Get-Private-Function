<?php

class Dog {
    private $sex = 'male';
}

$dog_sex = function(Dog $dog){
    return $dog->sex;
};

$dog = new Dog;

$dog_sex = Closure::bind($dog_sex, null, $dog);

echo $dog_sex($dog);