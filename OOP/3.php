<?php 

class fact{
    public function __construct($num){
        $sum=0;
        for($i=1;$i<=$num;$i++){
           $sum+=$i;
        }
        echo "the factorial is :: $sum ";
    }
}
$obj=new fact(2);


?>