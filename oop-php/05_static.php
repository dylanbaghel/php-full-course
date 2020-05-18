<?php 
    class Person {
        public static $species = "Homo sapiens";
        private $name;
        private $age;

        public function __construct($name, $age) 
        {
            $this->name = $name;
            $this->age = $age;
        }

        public static function getSpecies() {
            return self::$species;
        }
    }

    $person = new Person('Abhishek Baghel', 19);

    echo Person::$species;
    echo "<br>";
    echo Person::getSpecies();

?>