<?php 
/*
    Access Modifiers
        --> 1. Public
        --> 2. Protected
        --> 3. Private
*/
    class Person {
        public $firstName = 'Abhishek';
        public $lastName = 'Baghel';
        public $age = 19;

        public function getFullName() {
            return $this->firstName . " " . $this->lastName;
        } 
    }

    $person = new Person();
    echo $person->getFullName();
    $person->firstName = 'Dylan';
    $person->lastName = 'Baghel';
    echo "<br>" . $person->getFullName();

?>