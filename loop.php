<?php
// 1
for($i=1; $i<=10 ; $i++){
    if($i==10){
        echo $i;
    }
    else{
        echo $i."-";
    }
}

echo "<hr>";
// 2
$total = 0;
for($i=0 ; $i<=30 ;$i++){
    $total += $i;
}
echo "total numbers between 0 -30 : ". $total;

echo "<hr>";
// 3
$size = 5;
$letters = ['A', 'B', 'C', 'D', 'E'];

for ($row = 0; $row < $size; $row++) {
    for ($col = 0; $col < $size; $col++) {
        if ($col < $size - $row - 1) {
            echo "A ";
        } else {
            echo $letters[$row] . " ";
        }
    }
    echo "<br>";
}

echo "<hr>";
// 4
$rows = 5; 
for ($i = 1; $i <= $rows; $i++) {
    for ($j = 1; $j <= $rows; $j++) {
        if ($j <= $rows - $i) {
            echo "1 ";
        } else {
            echo $i . " ";
        }
    }
    echo "<br>"; 
}
echo "<hr>";
// 5
for($i=1 ; $i<=5 ;$i++ ){
    for($j=1 ; $j<=5 ;$j++ ){
        if($i==$j){
            echo $j;
        }else{
            echo 0;
        }
    }
    echo "<br>";
}

echo "<hr>";
// 6
$number = 5;
if ($number < 0) {
    echo "Factorial is not defined for negative numbers.";
} else {
    $factorial = 1;
    for ($i = 1; $i <= $number; $i++) {
        $factorial *= $i; 
    }
    echo "Factorial of $number is: $factorial";
}

echo "<hr>";
// 7


$n = 10; // عدد الأرقام المطلوبة

$f1 = 0;
$f2 = 1;

echo $f1 . ", " . $f2 . ", ";

for ($i = 3; $i <= $n; $i++) {
    $next = $f1 + $f2;
    echo $next . ", ";

    $f1 = $f2;
    $f2 = $next;
}




echo "<hr>";
// 8
$text = "Orange Coding Academy";
$count = 0;

for($i=0;$i<strlen($text);$i++){
    if($text[$i]=='c' || $text[$i]=='C')
        $count++;

}


echo "Number of 'c' characters: " . $count . "<br>";

echo "<hr>";
// 9

echo '<table border="1" cellpadding="3px" cellspacing="0px">';

for ($i = 1; $i <= 6; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 5; $j++) {
        $result = $i * $j;
        echo "<td>$i * $j = $result</td>";
    }
    echo "</tr>";
}

echo "</table>";



echo "<hr>";
// 10
for ($i = 1; $i <= 50; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz";
    } 
    elseif ($i % 3 == 0) {
        echo "Fizz";
    }
    elseif ($i % 5 == 0) {
        echo "Buzz";
    }
    else {
        echo $i;
    }
    
    if ($i < 50) {
        echo " ";
    }
}

echo "<hr>";
// 11
function generateFloydsTriangle($n) {
    $num = 1; 
    for ($row = 1; $row <= $n; $row++) {
        for ($col = 1; $col <= $row; $col++) {
            echo $num . " ";
            $num++;
        }
        echo "<br>"; 
    }
}
generateFloydsTriangle(5);

echo "<hr>";
// 12
$size = 5; 

for ($i = 1; $i <= $size; $i++) {
    for ($j = 0; $j < $i; $j++) {
        echo  chr(65 + $j) . " ";
    }
    echo "<br>";
}

for ($i = $size - 1; $i >= 1; $i--) {
    for ($j = 0; $j < $i; $j++) {
        echo chr(65 + $j) . " ";
    }
    echo "<br>";
}