<?php
    class Lambo3{
        private float $average;
        private int $max;
        private int $min;
        private int $sum;

        private array $numbers;

        public function __construct(array $numbers){
            $this->numbers = $numbers;
        }

        public function findSum (): int{
            $this->sum = 0;
            foreach($this->numbers as $number){
                $this->sum += $number;
            }
            return $this->sum;
        }

        public function findMax(): int{
            $this->max = 0;
            foreach($this->numbers as $number){
                if ($number > $this->max){
                    $this->max = $number;
                }
            }
            return $this->max;
        }

        public function findMin(): int{
            $this->min = $this->numbers[0];
            foreach($this->numbers as $number){
                if ($number < $this->min){
                    $this->min = $number;
                }
            }
            return $this->min;
        }

        public function findAverage(): float{
            return $this->findSum() / sizeof($this->numbers);
        }
    }
    $test = new Lambo3([3, 55, 26, 95, 43]);
    echo "Max: " . $test->findMax() . "</br>";
    echo "Min: " . $test->findMin() . "</br>";
    echo "Average: " . $test->findAverage() . "</br>";
    echo "Sum: " . $test->findSum() . "</br>";
?>