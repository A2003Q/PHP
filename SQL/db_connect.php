
<?php
//porcedure :
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "students";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
    echo 'Works successfully !';
}
?>

<?php
//OOP
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "students";

// Create connection (Object Oriented)
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
    echo 'Works successfully !';
}
?>

<?php
//PDO :
$host = "localhost";
$dbname = "students";
$username = "root";
$password = "";

try {
    $conn = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8",
        $username,
        $password
    );

    // تفعيل عرض الأخطاء
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
    echo 'Works successfully !';

?>