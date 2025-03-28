<?php
    class Math {
        public function add(float $a, float $b): float{
            return  $a + $b;
        }
        public function subtract(float $a, float $b): float{
            return  $a - $b;
        }
        public function multiply(float $a, float $b): float{
            return  $a * $b;
        }
        public function divide(float $a, float $b): float{
            return  $a / $b;
        }
        public function min(float $a, float $b): float{
            return  ($a<$b)?$a:$b;
        }
        public function max(float $a, float $b): float{
            return  ($a>$b)?$a:$b;
        }
    }
    $calculator = new Math();
    echo "Add Result: ".$calculator->add(5,2)."</br>";
    echo "Subtract Result: ".$calculator->subtract(5,2)."</br>";
    echo "Multiply Result: ".$calculator->multiply(5,2)."</br>";
    echo "Divide Result: ".$calculator->divide(5,2)."</br>";
    echo "Min Result: ".$calculator->min(5,2)."</br>";
    echo "Max Result: ".$calculator->max(5,2)."</br>";
?>