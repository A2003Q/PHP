<?php
class sort{
    public function __construct($array){
      sort($array);
      print_r($array);
    }
    
}
$array=[1,-3,7,3,2,6];
$obj=new sort($array);

?>