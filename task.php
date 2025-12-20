<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <?php
 // phpinfo();

  $str="Tomorrow I 'll learn PHP global variables"." <br>"." This is a bad command: del c:\.";
 // $str2= "This is a bad command: del c:\.";
  echo $str ;
  echo "<br>";
   $name  = $_POST['name'];
  echo $name;
  echo "<br>";
  $ip = $_SERVER['REMOTE_ADDR'];
  echo "Client IP Address: " . $ip;
  echo "<br>";
  echo basename($_SERVER['PHP_SELF']);
  echo "<br>";
   
  $dom= new DOMDocument();
  $dom->loadHTML("<html><body><p>Hello DOM</p><p>Deleted one</p></body></html>");
  $par= $dom->getElementsByTagName('p');
  foreach($par as $p){
    echo $p->nodeValue ."<br>";
  }
  $secondp=$dom->getElementsByTagName('p')[1];
  $secondp->parentNode->removeChild($secondp);
  echo "<br>";
    foreach($par as $p){
    echo $p->nodeValue ."<br>";
  }

  $dom2=new DOMDocument();
  $dom2->loadHTML("<html><body></body></html>");

  $newloading =$dom2->createElement("h2","this is a new heading");

  $dom2->getElementsByTagName("body")[0]->appendChild($newloading);
  echo $dom2->saveHTML();
  echo "<br>";

  session_start();
  $_SESSION["UserRole"] = "admin";
 header("/PHP/form.php");
 exit();


?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    Name: <input type="text" name="name" ><br><br>
    Email: <input type="email" name="email" ><br><br>
    Age: <input type="number" name="age" ><br><br>
    <input type="submit" value="Submit">
</form>





</body>
</html>
