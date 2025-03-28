<?php
    class Student{
        private $id;
        private $name;
        private $dob;
        private $address;
        public function setValues($id, $name, $dob, $address){
            $this->id = $id;
            $this->name = $name;
            $this->dob = $dob;
            $this->address = $address;
        }
        public function display(){
            return "Student id: {$this->id}\n
                    Student name: {$this->name}\n
                    Date of Birth: {$this->dob}\n
                    Address: {$this->address}
                    ";
        }
    }

    $student = new Student();
    $student->setValues(1, "Johny Sin", "17/08/1991", "USA");
    echo $student->display();
?>