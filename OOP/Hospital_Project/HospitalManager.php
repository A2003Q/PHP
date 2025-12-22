<?php
require_once "Staff.php"; 
require_once "Doctor.php"; 
require_once "Nurse.php"; 
class HospitalManager{
    public function checkWork(Staff $staffMember){
        $staffMember->performDuty();
    }
}

$obj=new HospitalManager();
$objs=[$doctor,$n];
foreach($objs as $i){
  $obj->checkWork($i);
}






?>