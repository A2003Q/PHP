<?php

require "db_connect.php";

$username=$_POST['username'];
$age=$_POST['age'];
$email=$_POST['email'];
$password=$_POST['password'];

$sql = "INSERT INTO students (username, age, email,password) VALUES (?, ?, ?,?)";

$stmt = $conn->prepare($sql);
$stmt->execute([$name, $email, $age ,$password]);

echo "Student added successfully!";






?>