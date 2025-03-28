<?php
abstract class ShapeArea {
    abstract public function getArea(): float;
        abstract public function toString(): string;
}

class Rectangle extends ShapeArea {
    private float $width;
    private float $length;

    public function __construct(float $width, float $length) {
        $this->width = $width;
        $this->length = $length;
    }

    public function getArea(): float {
        return $this->width * $this->length;
    }

    public function toString(): string {
        return "Rectangle[Width={$this->width}, Length={$this->length}, Area={$this->getArea()}]";
    }
}

class Circle extends ShapeArea {
    private float $radius;

    public function __construct(float $radius) {
        $this->radius = $radius;
    }

    public function getArea(): float {
        return pi() * pow($this->radius, 2);
    }

    public function toString(): string {
        return "Circle[Radius={$this->radius}, Area={$this->getArea()}]";
    }
}

class TriangleThreeSides extends ShapeArea {
    private float $a, $b, $c;

    public function __construct(float $a, float $b, float $c) {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function getArea(): float {
        $s = ($this->a + $this->b + $this->c) / 2;
        return sqrt($s * ($s - $this->a) * ($s - $this->b) * ($s - $this->c));
    }

    public function toString(): string {
        return "Triangle (3 sides)[a={$this->a}, b={$this->b}, c={$this->c}, Area={$this->getArea()}]";
    }
}

class TriangleBaseHeight extends ShapeArea {
    private float $base;
    private float $height;

    public function __construct(float $base, float $height) {
        $this->base = $base;
        $this->height = $height;
    }

    public function getArea(): float {
        return ($this->base * $this->height) / 2;
    }

    public function toString(): string {
        return "Triangle (Base-Height)[Base={$this->base}, Height={$this->height}, Area={$this->getArea()}]";
    }
}

class SemiCircle extends ShapeArea {
    private float $radius;

    public function __construct(float $radius) {
        $this->radius = $radius;
    }

    public function getArea(): float {
        return (pi() * pow($this->radius, 2)) / 2;
    }

    public function toString(): string {
        return "Semi-Circle[Radius={$this->radius}, Area={$this->getArea()}]";
    }
}


class Sector extends ShapeArea {
    private float $radius;
    private float $angle; 

    public function __construct(float $radius, float $angle) {
        $this->radius = $radius;
        $this->angle = $angle;
    }

    public function getArea(): float {
        return (pi() * pow($this->radius, 2) * $this->angle) / 360;
    }

    public function toString(): string {
        return "Sector[Radius={$this->radius}, Angle={$this->angle}°, Area={$this->getArea()}]";
    }
}


$shapes = [
    new Rectangle(4, 5),
    new Circle(3),
    new TriangleThreeSides(3, 4, 5),
    new TriangleBaseHeight(4, 6),
    new SemiCircle(5),
    new Sector(5, 120)
];

foreach ($shapes as $shape) {
    echo $shape->toString() . "<br>";
}
?>