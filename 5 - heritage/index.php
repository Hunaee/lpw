<?php

class Animal{

    protected string $name;
    protected string $breed;
    protected string $saying;

    public function __construct(string $name, $breed, $saying){
        $this->name = $name;
        $this->breed = $breed;
        $this->saying = $saying;
    } 

    public function speak():string{
        return "L'animal ayant la race {$this->breed} s'appellant {$this->name} dit {$this->saying}";
    }
}

class Dog extends Animal{
}


class Cat extends Animal{
}


$newDog = new Dog('Indi','Labrador','Woof');
echo $newDog->speak() . '</br>';


$newCat = new Cat('Lechat','Chartreux','Miaouw');
echo $newCat->speak() 

?>