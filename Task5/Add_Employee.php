<?php
require "config.php";

if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $salary = $_POST['salary'];

    $stmt = $conn->prepare(
        "INSERT INTO employees (name, address,salary) VALUES (?, ? ,?)"
    );
    $stmt->execute([$name, $address ,$salary]);

    header("Location: index.php");
}

?>


<h2>Add Employee</h2>
 
<form method="POST" >
    <input type="text" name="name" placeholder="Name"><br><br>
    <input type="text" name="address" placeholder="Address"><br><br>
    <input type="text" name="salary" placeholder="Salary"><br><br>
    <button>Add</button>

</form>