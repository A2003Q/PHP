<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $num=0;
    if($num>0)
       echo "POSITIVE";
    else if($num<0)
        echo "NEGATIVE";
    else
        echo "ZERO";

    echo "<br>";

$fruit="Apple";
switch($fruit){
    case "Apple" :
        echo "Apple";
        break;

    case "Bannan" :
        echo "Bannan";
        break;

     case "Mango" :
        echo "Mango";
        break;
}
echo "<br>";

for($i=0;$i<20;$i++){
  if($i%2==0){
    echo $i ;
  }
}

echo "<br>";

$movies=[
    "A","B","C","D","E"
];

foreach($movies as $m){
    echo $m;
}
echo "<br>";

for($j=1;$j<=10;$j++){
    if($j==5)
        continue;
    else if($j==8)
        break;
    else
        echo $j;
}





        ?>
</body>
</html>