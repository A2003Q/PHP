<?php
require_once "Staff.php"; 
require_once "EmergencyInterface.php"; 
class Nurse extends Staff implements EmergencyInterface{
    public $shiftTime ;


      public function performDuty(){
        echo "Working at the Heart Department in the {$this->shiftTime} shift <br>"; //{$this->salary}"; // error becouse it should be a this->getsalary , becouse it is private .
          echo "Salary after 10% tax: " . $this->getTaxedSalary() . "<br>";
    }

    public function handleEmergency(){
        echo"Nurse {$this->name} Handle this emergency case !! <br>";
    }
}

$n = new Nurse("Aisha", 201, 800);
$n->shiftTime="Night";
$n->performDuty();
$n->handleEmergency();



?>