<?php 
    class Person {
        private $firstName;
        private $lastName;
        private $age;

        public function __construct($firstName, $lastName, $age) 
        {
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->age = $age;
        }

        public function __destruct()
        {
            echo "Person Object Destroyed";
        }

        public function getFirstName() {
            return $this->firstName;
        }

        public function getLastName() {
            return $this->lastName;
        }

        public function getAge() {
            return $this->age;
        }

        public function getFullName() {
            return $this->firstName . " " . $this->lastName;
        } 
    }

    $person = new Person('Abhishek', 'Baghel', 19);

    echo $person->getFullName();
?>