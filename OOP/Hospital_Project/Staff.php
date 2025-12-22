<?php

 abstract class Staff{
    public $name="A";
    protected $id="1";
    private $salary="2000$";

    public function __construct($name,$id,$salary){
        $this->name=$name;
        $this->id=$id;
        $this->salary=$salary;
    }

     public function __destruct() {
        echo "Staff member {$this->name} record closed.<br>";
    }

    public function setSalary($s){
        $this->salary=$s;
      
    }
    public function getsalary(){
       return $this->salary;
    }
    abstract public function performDuty();

    public function getTaxedSalary(){
        return $this->salary * 0.9; 
    }
}

?>
