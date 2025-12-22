<?php

class Difference{
    public function __construct($date1,$date2){
        $d1=new DateTime($date1);
        $d2=new DateTime($date2);
        $diff=$d1->diff($d2);
        echo"Difference: ". $diff->y."Years ," .$diff->m ."months ,".$diff->d ." days ";
    }
}
$obj=new Difference("1981-11-03","2013-09-04");

?>