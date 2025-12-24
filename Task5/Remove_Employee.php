<?php
require "config.php";

$id=$_GET['id'];
$stmt = $conn->prepare("DELETE FROM employees WHERE id = ?");
$stmt->execute([$id]);

header("Location: index.php");



?>