<?php
    class Math {
        public function add(...$numbers): float|int{
            $result = 0;
            foreach($numbers as $number){
                $result += $number;
            }
            return  $result;
        }
        public function subtract(...$numbers): float|int{
            if(empty($numbers)){
               return 0;
            }
            $result = $numbers[0]*2; 
            foreach($numbers as $number){
                $result -= $number;
            }
            return  $result;
        }
        public function multiply(...$numbers): float|int{
            $result = 1;
            foreach($numbers as $number){
                $result *= $number;
            }
            return  $result;
        }
        public function min(...$numbers): float{
            $min = $numbers[0];
            foreach($numbers as $number){
                $min = ($min < $number)?$min:$number;
            }
            return $min;
        }
    }
    $calculator = new Math();
    echo "Add Result: ".$calculator->add(5, 2, 1, 3, 4, 5)."</br>";
    echo "Subtract Result: ".$calculator->subtract(5, 2, 1, 3, 4, 5)."</br>";
    echo "Multiply Result: ".$calculator->multiply(5, 2, 1, 3, 4, 5)."</br>";
    echo "Min Result: ".$calculator->min(5, 2, 1, 3, 4, 5)."</br>";
?>