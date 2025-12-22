<?php

class DateFormat{

    public function __construct($d){
        $date=DateTime::createFromFormat('d-m-Y',$d);
        echo $date->format('Y-m-d');
    }
}

$obj=new DateFormat('12-08-2004');

?>