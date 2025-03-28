<?php
    class Employee{
        private int $id;
        private String $firstName;
        private String $lastName;
        private int $salary;

        public function __construct (int $id, String $firstName, String $lastName, int $salary){
            $this->id = $id;
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->salary = $salary;
        }
        public function getId(): int{
            return $this->id;
        }
        public function getFirstName(): string{
            return $this->firstName;
        }

        public function getLastName(): string{
            return $this->lastName;
        }
        public function getName(): String {
            return $this->firstName . " " . $this->lastName;
        }
        public function getSalary(): int{
            return $this->salary;
        }
        public function setSalary(int $salary): void {
            $this->salary = $salary;
        }
        public function getAnnualSalary(): int{
            return $this->salary * 12;
        }
        public function raiseSalary(int $percent): int {
            $increaseSalary = $this->salary * $percent/100;
            $this->salary += $increaseSalary;
            return $this->salary;
        }

        public function toString(): String{
            return "Employee[id={$this->id}, name={$this->firstName} {$this->lastName}, salary={$this->salary}]";
        }
    }
    $employee = new Employee(1, 'Kok', 'Dara', 1200);
    echo $employee->toString()."</br>";
    echo "ID: " . $employee->getId()."</br>";
    echo "FirstName: " . $employee->getFirstName()."</br>"; 
    echo "LastName: " . $employee->getLastName()."</br>"; 
    echo "Name: " . $employee->getName()."</br>"; 
    $employee->setSalary(1500)."</br>";
    echo "Salary: " . $employee->getSalary()."</br>"; 
    echo "AnnualSalary: " . $employee->getAnnualSalary()."</br>"; 
    echo "RaiseSalary: " . $employee->raiseSalary(10); 
?>