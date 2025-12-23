<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Task</title>
</head>
<body>
    <?php
 
 // Q.1 :
  $name="aisha mohammad qarout ";
  echo strtoupper($name);
  echo "<br>";
  echo strtolower($name);
  echo "<br>";
  echo strtoupper($name[0]);
  echo "<br>";
  // another way to solve this
 // echo ucwords($name);
 $newName = "";

for ($i = 0; $i < strlen($name); $i++) {
    if ($i == 0 || $name[$i - 1] == " ") {
        $newName .= strtoupper($name[$i]);
    } else {
        $newName .= $name[$i];
    }
}

echo $newName;
echo "<br>";

// Q.2 :
 $str = "085119";
$time = chunk_split($str, 2, ":");
$time = rtrim($time, ":"); // remove last ":"
echo $time;
echo "<br>";

//Q.3:
$w="I am a full stack developer at orange coding academy";
   if(stripos($w,'Orange') ==true)
     echo "The Word had Found !";
    else
     echo "The Word had not Found !";
     echo "<br>";


//Q.4:
$url="www.orange.com/index.php";
echo basename($url); 
echo "<br>";

//Q.5:
$email = "info@orange.com";
$j = 0;

while ($email[$j] != '@') {
    echo $email[$j];
    $j++;
}
echo "<br>";

//Q.6 :
$j=0;
$i=strlen($email)-3;
while($j<3){
    echo $email[$i];
    $j++;
    $i++;
}
echo "<br>";

//Q.7 :
$chars = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";

$shuffled = str_shuffle($chars);

// choose the first N characters (example: 8 chars)
$password = substr($shuffled, 0, 8);

echo $password;
echo "<br>";

//Q.8 :
$sentence="That new trainee is so genius";
$sentence=str_replace("That","This",$sentence);
 echo $sentence;
 echo "<br>";

//Q.9 :

$String1 = "dragonball";
$String2 = "dragonboll";
$i=0;

while($String1[$i]==$String2[$i]){
    $i++;
}
echo $i;
echo "<br>";

//Q.10:

$string = "Twinkle, twinkle, little star.";
$array = explode(",", $string);
var_dump($array);
echo "<br>";

//Q.11 :

$letter='a';
$nextletter=++$letter;
echo $nextletter ;

//Q.12 :

$Original_String="The brown fox";
$pos=4;
$before = substr($Original_String, 0, $pos );
$after = substr($Original_String, $pos);
$updated_string = $before . "quick " . $after;
echo $updated_string;


// 13
$num ='0000657022.24';
function removeZeroes($n){
    $withoutZero=" ";
    for($i=0 ; $i<strlen($n) ; $i++){
        if($n[$i] != '0' ){
            $withoutZero.=$n[$i];
        }
    }
    echo "before : <b>".$n."</b> after : <b>".$withoutZero."</b>";
}
removeZeroes($num);

echo "<br>";
// 14
$s='The quick brown fox jumps over the lazy dog';
function removeWord($Str , $word){
    $lenOfWord = strlen($word);
    $position = strpos($Str , $word);
    // echo $position;
    $newStr = substr_replace($Str , "" , $position,$lenOfWord  );
    echo $newStr;
}
removeWord($s , 'fox');
echo " <br>";
removeWord($s , 'dog');

echo "<br>";
// 15
$sta ='The quick brown fox jumps over the lazy dog---';
function removeDashes($s){
    $withoutDash=" ";
    for($i=0 ; $i<strlen($s) ; $i++){
        if($s[$i] != '-' ){
            $withoutDash.=$s[$i];
        }
    }
    echo "before : <b>".$s."</b> after : <b>".$withoutDash."</b>";
}
removeDashes($sta);

echo "<br>";
// 16 
// is_int() => ما راح تزبط 
function removeSpecial($s){
    $justNum=" ";
    for($i=0 ; $i<strlen($s) ; $i++){
        if(ctype_digit($s[$i])){
            $justNum.=$s[$i]." ";
        }
    }
    echo "before : <b>".$s."</b> after : <b>".$justNum."</b>";
}
removeSpecial('\"\1+2/3*2:2-3/4*3'); 

echo "<br>";
// 17
$paragraph = 'The quick brown fox jumps over the lazy dog';
$arrayOfWords = explode(" ", $paragraph);
// print_r($arrayOfWords);
$firstFive = $arrayOfWords[0]." ".$arrayOfWords[1]." ".$arrayOfWords[2]." ".$arrayOfWords[3]." ".$arrayOfWords[4]." ";
echo $firstFive;

echo "<br>";
// 18
$n ='2,543.12';
function removeCommas($n){
    $withoutComma=" ";
    for($i=0 ; $i<strlen($n) ; $i++){
        if($n[$i] != ',' ){
            $withoutComma.=$n[$i];
        }
    }
    echo "before : <b>".$n."</b> after : <b>".$withoutComma."</b>";
}
removeCommas($n);
echo "<br>";
removeCommas('31,2,5,4,3.12');

echo "<br>";
// 19
for ($x = ord('a'); $x <= ord('z'); $x++) { 
    //ord('a'): This function returns the ASCII 
    echo chr($x);
}






?>

</body>
</html>