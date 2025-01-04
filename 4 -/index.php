<?php



enum fuel:int{
    case Diesel = 0;
    case Essence = 1;
}

// $carFuel = fuel::0;

class Car{
    public string $brand;
    public string $model;
    public string $color;
    public int $price;
    public fuel $type;

    function __construct(string $brand, string $model, string $color, int $price, fuel $type){
        $this->brand = $brand;
        $this->model = $model;
        $this->color = $color;
        $this->price = $price;
        $this->fuel = $type;

    }
    
    public function introduceCar(){
        return "The brand is {$this->brand}, the model is {$this->model}, The fuel is {$this->fuel->name}, The color is {$this->color} and price is {$this->price}";
    }


}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  echo(new Car('BMW', 'X5', 'Black', 75000, (fuel::Diesel)))->introduceCar();
    
    ?>    



</body>
</html>