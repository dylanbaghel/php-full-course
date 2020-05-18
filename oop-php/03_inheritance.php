<?php 
    
    class Person {
        private $name;
        private $age;

        public function __construct($name, $age) {
            $this->name = $name;
            $this->age = $age;
        }

        public function getInfo() {
            return "Name: " . $this->name . ", Age: " . $this->age;
        }
    }

    class Blogger extends Person {
        private $category;

        public function __construct($name, $age, $category) 
        {
            parent::__construct($name, $age);
            $this->category = $category;
        }

        // Method Overriding --> Polymorphism
        public function getInfo()
        {
            return parent::getInfo() . ", Category: " . $this->category;
        }
    }

    $blogger = new Blogger('Abhishek', 19, 'Technology');
    echo $blogger->getInfo();
    echo "<br>";

    $person = new Person('Dylan', 'Baghel');
    echo $person->getInfo();

?>