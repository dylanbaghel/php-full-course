<?php 

    abstract class Person {
        protected $name;
        protected $age;

        public function __construct($name, $age) {
            $this->name = $name;
            $this->age = $age;
        }

        abstract function getInfo();
    }

    class Blogger extends Person {
        private $category;

        public function __construct($name, $age, $category) {
            parent::__construct($name, $age);
            $this->category = $category;
        }

        public function getInfo() {
            echo "<p>Name: " . $this->name ."</p>";
            echo "<p>Age: " . $this->age ."</p>";
            echo "<p>Category: " . $this->category ."</p>";
        }
    }

    $blogger = new Blogger('Abhishek', 'Baghel', 'Food');
    $blogger->getInfo();

?>