<?php
require "config.php";

$stmt = $conn->query("SELECT * FROM employees");
$employee=$stmt->fetchAll();

?>

<h2>Employees</h2>

<a href="Add_Employee.php">Add Employee</a>

<table border="1">
    <tr>
        <th>id</th>
        <th>Name</th>
        <th>address</th>
        <th>salary</th>
        <th>button</th>
    </tr>

    <?php foreach ($employee as $e): ?>
    <tr>
        <td><?= $e['id'] ?></td>
        <td><?= $e['name'] ?></td>
        <td><?= $e['address'] ?></td>
        <td><?= $e['salary'] ?></td>
        <td>
            <a href="Update_Employee.php?id=<?= $e['id'] ?>">Edit</a>
            <a href="Remove_Employee.php?id=<?= $e['id'] ?>">Delete</a>
            <a href="View_Employee.php">View</a>
            
        </td>
    </tr>
    <?php endforeach; ?>
</table>