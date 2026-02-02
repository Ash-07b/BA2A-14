<?php

// Product interface
interface Shape {
    public function draw();
}

// Concrete Products
class Circle implements Shape {
    public function draw() {
        echo "Drawing a Circle\n";
    }
}

class Square implements Shape {
    public function draw() {
        echo "Drawing a Square\n";
    }
}

class Triangle implements Shape {
    public function draw() {
        echo "Drawing a Triangle\n";
    }
}

// Factory class
class ShapeFactory {
    public static function createShape($type) {
        switch (strtolower($type)) {
            case 'circle':
                return new Circle();
            case 'square':
                return new Square();
            case 'triangle':
                return new Triangle();
            default:
                throw new Exception("Invalid shape type: $type");
        }
    }
}

// Usage example
try {
    $circle = ShapeFactory::createShape('circle');
    $circle->draw(); // Output: Drawing a Circle

    $square = ShapeFactory::createShape('square');
    $square->draw(); // Output: Drawing a Square

    $triangle = ShapeFactory::createShape('triangle');
    $triangle->draw(); // Output: Drawing a Triangle
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

?>
