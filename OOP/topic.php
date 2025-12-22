<?php

class Student {

    // Properties
    public $name;          // accessible everywhere
    protected $id;         // accessible in class & child classes
    private $password;     // accessible only inside this class

    // Constructor
    public function __construct($name, $id, $password) {
        $this->name = $name;
        $this->id = $id;
        $this->password = $password;
        echo "Student object created.<br>";
    }

    // Public method
    public function displayInfo() {
        echo "Name: " . $this->name . "<br>";
        echo "ID: " . $this->id . "<br>";
    }

    // Private method
    private function showPassword() {
        echo "Password: " . $this->password;
    }

    // Destructor
    public function __destruct() {
        echo "Student object destroyed.<br>";
    }
}

// Creating an object
$student1 = new Student("Aisha", 101, "12345");

// Using public method
$student1->displayInfo();

// ❌ This would cause an error (private)
// echo $student1->password;

?>
