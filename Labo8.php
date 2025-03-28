<?php
    abstract class Shap {
        private String $color;
        public function __construct($color){
            $this->color = $color;
        }
        abstract public function getArea():float;
        abstract public function toString():String;
    }
    class Rectangle extends Shap{
        private int $length;
        private int $width;
        public function __construct($color, $width, $length){
            parent::__construct($color);
            $this->length = $length;
            $this->width = $width;
        }
        public function getArea(): float{
            return $this->length * $this->width;
        }
        public function toString(): string{
            return "Rectangle[Width={$this->width}, Length={$this->length}, Area={$this->getArea()}]";
        }
    }
    class Triangle extends Shap{
        private int $base;
        private int $height;
        public function __construct($color, $height, $base){
            parent::__construct($color);
            $this->base = $base;
            $this->height = $height;
        }

        public function getArea(): float{
            return ($this->base * $this->height)/2;
        }
        public function toString(): string{
            return "Triangle[Base={$this->base}, Height={$this->height}, Area={$this->getArea()}]";
        }
    }
    $rectangle = new Rectangle("Red", 2, 3);
    $triangle = new Triangle("blue", 2, 4);
    echo "Rectangle: " . $rectangle->toString()."</br>";
    echo "Triangle: " . $triangle->toString();
?>