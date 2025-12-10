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

?>

</body>
</html>