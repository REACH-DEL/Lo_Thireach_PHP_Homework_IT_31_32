<?php
    class Math{
        public function factorial (int $number){
            $x = $number-1;
            while ($x > 0){
                $number *= $x;
                $x -= 1;
            }
            return $number;
        }
        public function rectangleSurface(float $width, float $height){
            return $width * $height;
        }

        public function circleSurface (float $radius){
            return pi() * ($radius**2);
        }

        public function max (int $a, int $b, int $c, int $d, int $e){
            $numbers = [$a, $b, $c, $d, $e];
            $max = $numbers[0];
            foreach($numbers as $number){
                $max = $max>$number?$max:$number;
            }
            return $max;
        }
        public function min (int $a, int $b, int $c, int $d, int $e){
            $numbers = [$a, $b, $c, $d, $e];
            $min = $numbers[0];
            foreach($numbers as $number){
                $min = $min<$number?$min:$number;
            }
            return $min;
        }
    }
    $calculator = new Math();
    echo "Factorial: " . $calculator->factorial(5) . "</br>";
    echo "RectangleSurface: " . $calculator->rectangleSurface(8, 4) . "</br>";
    echo "CircleSurface: " . $calculator->circleSurface(5) . "</br>";
    echo "Max: " . $calculator->max(5, 8, 2, 9, 3) . "</br>";
    echo "Min: " . $calculator->min(5, 8, 2, 9, 3) . "</br>";
?>