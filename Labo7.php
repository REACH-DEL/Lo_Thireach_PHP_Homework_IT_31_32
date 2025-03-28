<?php
    class Circle {
        private $radius;
        public function __construct($radius){
            $this->radius = $radius;
        }
        public function getRadius(){
            return $this->radius;
        }
        public function getArea(){
            return $area = pi() * ($this->radius ** 2);
        }
        public function toString (){
            $area = pi() * ($this->radius ** 2);
            return "Circle[Radius={$this->radius}, Area={$this->getArea()}]";
        }
    }

    class CyLinder extends Circle {
        private $height;
        public function __construct($radius, $height){
            parent::__construct($radius);
            $this->height = $height;
        }
        public function getHeight(){
            return $this->height;
        }
        public function getVolume(){
            return pi() * ($this->getRadius() ** 2) * $this->height;
        }
        public function getArea(){

            return 2* pi() * ($this->getRadius()**2)+ 2 * pi() * $this->getRadius() * $this->height;
        }
        public function toString(){
            return "Circle[Radius={$this->getRadius()}, Height={$this->height}, Volume={$this->getVolume()}, Area={$this->getArea()}]";
        }
    }
    $circle = new Circle(3);
    echo "Circle: " . $circle->toString() . "</br>";
    $cylinder = new CyLinder(3, 5);
    echo "Cylinder: " . $cylinder->toString();
?>