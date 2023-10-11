<?php

// Define a class
class Car {
    // Properties
    public string $version = 'v1';
    private string $make;
    protected string $model;
    private int $year;

    // Constructor
    public function __construct($make, $model, $year)
    {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    // Methods
    public function start(): void
    {
        echo "Starting the {$this->make} {$this->model} {$this->year}.\n";
    }

    public function accelerate(): void
    {
        echo "Accelerating...\n";
    }

    public function stop(): void
    {
        echo "Stopping the {$this->make} {$this->model} {$this->year}.\n";
    }

    // Getters and setters
    public function getMake()
    {
        return $this->make;
    }

    public function setMake($make): void
    {
        $this->make = $make;
    }
}

// Create an object of the Car class
$myCar = new Car("Toyota", "Camry", 2023);

// Accessing properties using getter and setter
$myCar->setMake("Honda");
echo "Make of the car: " . $myCar->getMake() . "\n";

// Call methods
$myCar->start();
$myCar->accelerate();
$myCar->stop();

// Inheritance
class SportsCar extends Car
{
    public function __construct($make, $model, $year)
    {
        parent::__construct($make, $model, $year);
    }

    public function turboCharge() : void
    {
        echo "Turbocharging the {$this->getMake()} {$this->model}.\n";
    }
}

$sportsCar = new SportsCar("Ferrari", "458 Italia", 2023);
$sportsCar->start(); // Access Parent Class Behaviour
$sportsCar->accelerate(); // Access Parent Class Behaviour
$sportsCar->turboCharge(); // Access Own Class Behaviour
$sportsCar->stop(); // Access Parent Class Behaviour

// Polymorphism
function driveCar(Car $car) : void
{
    echo "Driving the {$car->getMake()} {$car->version}.\n";
}

driveCar($myCar); // When call driveCar() Must Have to pass Car class object or Car class,s Child classes object
driveCar($sportsCar); // The $sportsCar is Object of Car child class SportsCar()

// Abstraction and Interface
interface Shape {
    public function getArea();
    public function getPerimeter();
}

class Circle implements Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function getArea()
    {
        return pi() * $this->radius * $this->radius;
    }

    public function getPerimeter()
    {
        return 2 * pi() * $this->radius;
    }
}

class Rectangle implements Shape
{
    private $length;
    private $width;

    public function __construct($length, $width)
    {
        $this->length = $length;
        $this->width = $width;
    }

    public function getArea()
    {
        return $this->length * $this->width;
    }

    public function getPerimeter()
    {
        return 2 * ($this->length + $this->width);
    }
}

$circle = new Circle(5);
$rectangle = new Rectangle(4, 6);

echo "Circle Area: " . $circle->getArea() . "\n";
echo "Rectangle Perimeter: " . $rectangle->getPerimeter() . "\n";

?>
