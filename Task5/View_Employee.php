<?php
require "config.php";

$stmt=$conn->query("SELECT * FROM employees");
$employee=$stmt->fetchAll();




?>


<table border="1">
    <tr>
        <th>id</th>
        <th>Name</th>
        <th>address</th>
        <th>salary</th>
   
    </tr>

    <?php foreach ($employee as $e): ?>
    <tr>
        <td><?= $e['id'] ?></td>
        <td><?= $e['name'] ?></td>
        <td><?= $e['address'] ?></td>
        <td><?= $e['salary'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>