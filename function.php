<?php
// 1
//prime
function isPrime($num){
    if($num < 2){
        echo "$num isn't Prime <br>";
        return;
    }

    for($i=2 ; $i < $num; $i++){
        if($num % $i == 0){
            echo "$num isn't Prime <br>";
            return;
        }
    }

    echo "$num is Prime <br>";
}

isPrime(1);
isPrime(5);
isPrime(3);
isPrime(6);
isPrime(9);

echo "<hr>";
// 2
// reverse 
function rev($str){
    $str2 =  strrev($str);
    echo $str2;
}
rev('hello world');

echo "<hr>";
// 3
function isLower($str){
    if(ctype_lower($str)){
        echo "Your String is Ok <br>";
    }else{
        echo "Your String should be lowerCase <br>";
    }
}
isLower('remove');
isLower('Remove');

echo "<hr>";
// 4
function swap($num1 , $num2){
    $num = 0;
    echo "before swap , num1 = ".$num1." & num2 = ".$num2."<br>";
    $num = $num1;
    $num1 = $num2;
    $num2 = $num ; 
    echo "after swap , num1 = ".$num1." & num2 = ".$num2."<br>";
}
swap(4,9);
swap(12,30);

echo "<hr>";
// 5
function isArmstrong($num){
    $power = strlen($num);

    $spliting = str_split($num, 1);
    // print_r($spliting);
    $num1 = (int)$spliting[0];
    $num2 = (int)$spliting[1];
    $num3 = (int)$spliting[2];

    $powerNum1= pow($num1 , $power);
    $powerNum2= pow($num2 , $power);
    $powerNum3= pow($num3 , $power);

    $sum = $powerNum1 + $powerNum2 + $powerNum3;
    if($sum == $num){
        echo $num." is Armstrong Number <br>";
    }else{
        echo $num." is not Armstrong Number <br>";
    }

}
isArmstrong('234'); 
isArmstrong('407'); 
isArmstrong('9474'); 
isArmstrong('125'); 
isArmstrong('370'); 


echo "<hr>";
// 6

function isPalindrome($str) {
    $clean = preg_replace("/[^A-Za-z0-9]/", "", $str);

    $clean = strtolower($clean);

    $reverse = strrev($clean);

    if ($clean === $reverse) {
        echo "Yes it is a palindrome";
    } else {
        echo "No it is not a palindrome";
    }
}

// Sample Input
isPalindrome("Eva, can I see bees in a cave?");

echo "<hr>";
// 7
function removeDuplicates($array) {
    $newArray = [];

    foreach ($array as $value) {
        if (!in_array($value, $newArray)) {
            $newArray[] = $value;
        }
    }
    return $newArray;
}

$array1 = array(2, 4, 7, 4, 8, 4);
$array1 = removeDuplicates($array1);
print_r($array1);


?>