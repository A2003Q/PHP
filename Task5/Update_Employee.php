<?php
require "config.php";

$id = $_GET['id'];

$stmt = $conn->prepare("SELECT * FROM employees WHERE id = ?");
$stmt->execute([$id]);
$employee = $stmt->fetch();

if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $salary=$_POST['salary'];

    $stmt = $conn->prepare(
        "UPDATE employees SET name = ?, address = ?,salary = ? WHERE id = ?"
    );
    $stmt->execute([$name, $address,$salary,$id]);

    header("Location: index.php");
}
?>

<h2>Update User</h2>

<form method="POST">
    <input type="text" name="name" value="<?= $employee['name'] ?>"><br><br>
    <input type="text" name="address" value="<?= $employee['address'] ?>"><br><br>
     <input type="text" name="salary" value="<?= $employee['salary'] ?>"><br><br>
    <button>Update</button>
</form>