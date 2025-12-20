<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>

<?php
session_start();

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Safely get role
    $role = $_POST["User_Role"] ?? "";

    if ($role === "admin") {
        $_SESSION["User_Role"] = "admin";
        header("Location: dashboard.php");
        exit();

    } elseif ($role === "user") {
        $_SESSION["User_Role"] = "user";
        header("Location: user.php");
        exit();

    } else {
        echo "Invalid login!";
    }
}
?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    Name: <input type="text" name="name"><br><br>
    User Role: <input type="text" name="User_Role"><br><br>
    <input type="submit" value="Submit">
</form>

</body>
</html>
