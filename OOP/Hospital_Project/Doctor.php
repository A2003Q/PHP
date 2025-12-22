<?php
require_once "Staff.php"; 
require_once "SurgeonInterface.php"; 
class Doctor extends Staff implements SurgeonInterface{
    public $specialty;
    
    public function performDuty() {
        echo "Applying {$this->specialty} surgery.<br>";
        // Accessing protected property directly
        echo "Doctor ID: {$this->id}<br>";
        echo "Doctor ID: {$this->getsalary()}<br>";
        echo "Salary after 10% tax: " . $this->getTaxedSalary() . "<br>";
    }

    public function performSurgery(){
        echo "Doctor {$this->name} perform you surgery ASAP!<br>";
    }
}

$doctor = new Doctor("Aisha",1, 2000);
$doctor->specialty = "Heart";
$doctor->setsalary(5000);
$doctor->performDuty();
$doctor->performSurgery();


?>