<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
 session_start();
  echo $_SESSION["User_Role"];
  
if (isset($_POST['logout'])) {
    session_unset();      // Remove all session variables
    session_destroy();    // Destroy the session
    header("Location: login.php"); // Redirect (optional)
    exit();
}
?>
 <form method="post">
    <button type="submit" name="logout">Logout</button>
</body>
</html>