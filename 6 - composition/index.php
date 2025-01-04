<?php


//Pour chaque animal il faut
//

class Zoo{
    protected array $animals;
    public function __construct($animals){
        $this->animals = $animals;
    }

    public function addAnimals(Animal $animal){
         array_push($animals, $animal);
    }

    public function animalsSpeaks(){
        forEach($this->animal as $animal){
            $content =  "</br>L\'animal {$this->name} parle le {$this->saying}"; 
        }
        return $content;
    }
}


class Animal{
    protected string $name;
    protected string $breed;
    protected string $saying;

    public function __construct(string $name, string $breed, string $saying){
        $this->name = $name;
        $this->breed = $breed;
        $this->saying = $saying;
    }
    
    public function speak(){
        return "<br/> L'animal susnommé : {$this->name} ayant la race {$this->breed} dit : {$this->saying}";
    }

}


class Lion extends Animal{
    public function speak(){
        return "<br/> Je suis un lion appelé {$this->name} avec une race {$this->breed} et je dis {$this->saying}";
    }
}

class Eagle extends Animal{
    public function speak(){
        return "<br/> Je suis un Eagle appelé {$this->name} avec une race {$this->breed} et je dis {$this->saying}";
    }
}


$newLion = new Lion('Lion','RaceLion','Graou');
echo $newLion->speak();

$newEagle = new Eagle('eagle','RaceAigle','idontknow');
echo $newEagle->speak();

$nouvelAnimal = new Zoo(new Animal('chien', 'raceChien', 'woof'));
echo '</br>' . $nouvelAnimal->getAnimal()->getBreed();






?>