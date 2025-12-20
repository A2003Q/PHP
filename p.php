<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    // TASK 1 :
     $name="Aisha Qarout";
     $age=21;
     $country="Jordan";
    echo "Welcom to my website , $name! , My age is ,$age , My country is , $country <br>";
    print_r( "Welcom to my website , $name! , My age is ,$age , My country is , $country <br>");
    
    $hobbies=["Swimming","walking","Traveling"];

    print_r($hobbies);
    echo  $hobbies [0] ,"<br>";
    
    const r="wow";
    echo r,"<br>" ;

    define("Y","WOW");
    echo Y ,"<br>" ;
    
    $num=5;
    if($num>18 && $num<60){
         echo "GREAT WORK !! ,<br>";
    }
    else
        echo "Not Great Work ,<br>";

    $isAdmin=false;
    $isUser= false;

    if( $isAdmin || !$isUser )
      echo "HELLO ADMIN  !!";

    else if(!$isAdmin || $isUser)
        echo "HELLO USER !! , <br>";

    else
        echo "WHO YOU ARE !! , <br>";

    $info = [
        "name" => "Aisha",
    "age" => 21,
    "city" => "Amman"

    ];

     print_r($info ,"<br>");

     $book =[
        ["book1","aisha",3],
       ["book1","aisha","3.00jd"],
       ["book1","aisha","3.00jd"]
     ];

     print_r($book , "<br>");
    
     $fullname ="Aisha Mohammad Qarout";
     echo strlen($fullname);
     echo strpos($fullname,"Qarout ");
     echo substr($fullname ,0,5);
     echo strtoupper($fullname );


     $salary =[
        ["Salary of Me.A is ","1000$"],
        ["Salary of Me.B is ","1200$"],
        ["Salary of Me.C is ","1300$"]

     ];

     echo "<table border=1 >";

     foreach ($salary as $row){
 echo "<tr>
           <td>{$row[0]}</td>
           <td>{$row[1]}</td>

           </tr>";

     }

     // TASK "Array" 
     // Q.1:
     echo "</table>";
     $filename="p.php";
     $filetimestamp=filemtime($filename);
     $format =date("l,js F,Y,h:ia",$filetimestamp);
     echo "Last Modified date".$format,"<br>";
      $lines=file($filename);
     echo count($lines),"<br>";

    //Q.2:
     $colors = ["red","green","white"];

     echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the, $colors[0] carpet, the $colors[1] lawn, the $colors[2] house, the leaden sky. The new president and his first lady. - Richard M. Nixon";
     
     echo "<ul>";
     echo "<li>$colors[1]</li>";
     echo "<li>$colors[0]</li>" ;
     echo "<li>$colors[2]</li>";
     echo "</ul>" ;

    //Q.3:
     $cities=[
        ["italy","Rome"],
        ["Luxembourg","Luxembourg"],
        ["Belgium","Brussels"],
        ["Denmark","Copenhagen"],
        ["Finland","Helsinki"]

     ];

     foreach($cities as $row){
        echo "The Capital of ",$row[0] ," is ",$row[1] ,"<br>";
     }

     //Q.4:
     $color =array(
        4 =>'white',
        6 =>'green',
        11 =>'red'
     );

     echo ($color[4]),"<br>" ;

     //Q.5:
     $num=["1","2","3","4"];
     $temp=$num[3];
     $num[3]="$";
     $num[4]=$temp;

     print_r($num);
     echo "<br>";

     //Q.6:
     $fruits =array(
        "d"=>"lemon" ,
        "a"=>"orange",
        "b"=>"banana",
        "c"=>"apple"
     );

     sort($fruits);
    print_r($fruits,"<br>");

    //Q.7:
    $tempeture=[
        78,60,62,68,71,68,73,85,66,64,76,63,75,76,73,68,62,73,72,65,74,62,62,65,64,68,73,75,79,73
    ];
    $sum=0;
    foreach($tempeture as $i){
      $sum+=$i;
    }
    $avg=$sum/count($tempeture);
    echo "The Avg is  ", $avg ,"<br>";
    sort($tempeture);
    $count=0;
    echo "List of seven lowest temperatures:";
    while($count<7){
         echo $tempeture[$count]," ";
         $count++;
    }
    $count=0;
    echo " <br> List of seven highest temperatures: ";
    $index=count($tempeture)-1;
      while($count<7){
         echo $tempeture[$index]," ";
         $count++;
         $index--;
    }

    //Q.8:
    $array1 =array
    ("color"=>"red",
    2,
    4);
    $array2=
    array("a"
    ,"b",
    "color"=>"green",
    "shape"=>"trapezoid",4);
    $result= array_merge($array1,$array2);
     echo "<br>";
     print_r($result,"<br>");

     //Q.9 :
     $colors2=array("red","blue","white","yellow");

     foreach($colors2 as &$c){
       $c=strtoupper($c);
     }
     print_r($colors2);
     echo "<br>";

     //Q.10 :
     $colors2=array_map('strtolower',$colors2);
     print_r($colors2);
     echo "<br>";

    //Q.11 :
     for($i=200;$i<=250;$i+=4){
        echo $i ," " ;
        
     }
     
     echo "<br>";
     
     //Q.12 :

     $words = array("abcd", "abc", "de", "hjjj", "g", "wer");
     $lengths = array_map('strlen', $words);
     $shortest = min($lengths);
     $longest  = max($lengths);
     echo "The shortest array length is $shortest. ";
     echo "The longest array length is $longest.";
     echo "<br>";

     //Q.13 :
     $start = 11;
     $end   = 20;
     $number= range($start, $end);
     shuffle($number);
     echo implode(" ", $number); //display them as a space-separated string.
     echo "<br>";
     
     //Q.14 :
     $array3=array(2, 0, 10, 12, 6);
     $min=$array3[count($array3)-1];
     foreach($array3 as $i){
        if($i !=0 && $i<$min)
            $min=$i;
     }
     echo $min;
     
    


    






    ?>
    
</body>
</html>
