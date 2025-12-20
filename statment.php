<?php
// 1
function isLeap($year) {
    return ($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0));
}

$sampleYear = 2013;
if (isLeap($sampleYear)) {
    $outputMessage = "$sampleYear is a leap year";
} else {
    $outputMessage = "$sampleYear is not a leap year";
}
echo $outputMessage;


echo "<hr>";
// 2
function checkSeason($temperature) {
    if ($temperature < 20) {
        return 'It is wintertime!';
    } else {
        return 'It is summertime!';
    }
}

$temp1 = 15;
echo "Sample Input: $temp1 <br>";
echo "Sample Output: '" . checkSeason($temp1) . "<br>";

$temp2 = 27;
echo "Sample Input: $temp2 <br>";
echo "Sample Output: '" . checkSeason($temp2) . "<br>";


echo "<hr>";
// 3
function sum($val1 , $val2){
    if($val1==$val2){
        $result=($val1 + $val2 )*3;
        echo $val1 ." & ". $val2 . " are the same , so triple of their sum =" .$result."<br>";
    }
    else{
        $result = $val1 + $val2;
        echo $val1 ." + ". $val2 . " = " .$result."<br>";
    }
}
sum(4,6);
sum(7,7);

echo "<hr>";
// 4
function sum30($val1 , $val2){
    if($val1+$val2==30){
        $result=$val1 + $val2;
        return $val1 ." + ". $val2 . " =" .$result."<br>";
    }
    else{
        return false;
    }
}
echo sum30(14,16);
echo sum30(22,10);


echo "<hr>";
// 5
function multipleOf3($num){
    if($num %3 == 0){
        echo true;
    }else{
        echo false;
    }
}
multipleOf3(9);
multipleOf3(7);


echo "<hr>";
// 6
function inRange($num){
    if($num >=20 && $num<=50){
        echo "This Number <b>".$num."</b> is in range [20-50] <br>";
    }else{
        echo "This Number <b>".$num."</b>  isn't in range [20-50] <br>";
    }
}

inRange(18);
inRange(43);

echo "<hr>";
// 7
function isMax($arr){
    $max = $arr[0];
    foreach($arr as $key => $val){
        if($arr[$key] > $max){
            $max = $arr[$key] ;
        }
    }
    echo "max : ".$max;
}
isMax([ 1, 5, 9]);

echo "<hr>";
// 8


function calculateBill($units) {
    $bill = 0;

    if ($units <= 50) {
        $bill = $units * 2.50;

    } elseif ($units <= 150) {
        $bill = (50 * 2.50) + (($units - 50) * 5.00);

    } elseif ($units <= 250) {
        $bill = (50 * 2.50) + (100 * 5.00) + (($units - 150) * 6.20);

    } else {
        $bill = (50 * 2.50) + (100 * 5.00) + (100 * 6.20) + (($units - 250) * 7.50);
    }

    return $bill;
}

$units = 275;
echo "Total Bill: " . calculateBill($units) . " JOD";



echo "<hr>";
// 9
function calc($num1  , $num2 , $operation ){
$result = "";
    switch ($operation) {
        case '+':
            $result = $num1 + $num2 ."<br>";
            break;
        case '-':
            $result = $num1 - $num2 ."<br>";
            break;
        case '*':
            $result = $num1 * $num2 ."<br>";
            break;
        case '/':
            if ($num2 != 0) {
                $result = $num1 / $num2 ."<br>";
            } else {
                $result = "Error: Cannot divide by zero <br>";
            }
            break;
        default:
            $result = "Please select an operation <br>";
            break;
    }
    echo $result ;
}
calc(9,5,'+');
calc(90,10,'/');
calc(4,7,'*');
calc(8,2,'-');


echo "<hr>";
// 10
function checkVotingEligibility($age) {
    if ($age >= 18) {
        return "is eligible to vote";
    } else {
        return "is no eligible to vote";
    }
}

echo "Age 15: " . checkVotingEligibility(15) . "<br>";
echo "Age 18: " . checkVotingEligibility(18) . "<br>";
echo "Age 25: " . checkVotingEligibility(25) . "<br>";

echo "<hr>";
// 11
function checkNumberType($num) {
    if ($num > 0) {
        return "Positive";
    } elseif ($num < 0) {
        return "Negative";
    } else {
        return "Zero";
    }
}

echo "Number -60: " . checkNumberType(-60) . "<br>";
echo "Number 0: " . checkNumberType(0) . "<br>";
echo "Number 25: " . checkNumberType(25) . "<br>";


echo "<hr>";
// 12
function calculateGrade($scores) {
    $average = array_sum($scores) / count($scores);
    
    if ($average >= 90) {
        return 'A';
    } elseif ($average >= 80) {
        return 'B';
    } elseif ($average >= 70) {
        return 'C';
    } elseif ($average >= 60) {
        return 'D';
    } else {
        return 'F';
    }
}

$studentScores = [60, 86, 95, 63, 55, 74, 79, 62, 50];

$grade = calculateGrade($studentScores);


echo "Scores [95, 95, 95, 95, 95] -> Grade: '" . calculateGrade([95, 95, 95, 95, 95]) . "<br>";
echo "Scores [85, 82, 88, 86, 84] -> Grade: '" . calculateGrade([85, 82, 88, 86, 84]) . "<br>";
echo "Scores [72, 75, 70, 68, 74] -> Grade: '" . calculateGrade([72, 75, 70, 68, 74]) . "<br>";
echo "Scores [65, 62, 68, 63, 64] -> Grade: '" . calculateGrade([65, 62, 68, 63, 64]) . "<br>";
echo "Scores [55, 58, 52, 50, 54] -> Grade: '" . calculateGrade([55, 58, 52, 50, 54]) . "<br>";

?>