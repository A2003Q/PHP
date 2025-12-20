<!DOCTYPE html>
<html>
<head>
    <title>Simple Secure Form</title>
</head>
<body>

<h2>Simple Registration Form</h2>

<?php

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // 1️⃣ Sanitize input
    $name  = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $age   = htmlspecialchars(trim($_POST['age']));

    $errors = [];

    // 2️⃣ Validate input
    if (empty($name)) {
        $errors[] = "Name is required.";
    }

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Valid email is required.";
    }

    if (empty($age) || !is_numeric($age) || $age <= 0) {
        $errors[] = "Valid age is required.";
    }

    // 3️⃣ Display errors or success
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
    } else {
        echo "<h3>Form submitted successfully!</h3>";
        echo "Name: $name <br>";
        echo "Email: $email <br>";
        echo "Age: $age";
    }
}

session_start();
if (isset($_SESSION["UserRole"])) {
    echo "Welcome, " . $_SESSION["UserRole"] . "<br>";
} else {
    echo "No session data found.";
}
//session_unset();
//session_destroy();
?>

<!-- HTML Form -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    Name: <input type="text" name="name" ><br><br>
    Email: <input type="email" name="email" ><br><br>
    Age: <input type="number" name="age" ><br><br>
    <input type="submit" value="Submit">
</form>

</body>
</html>
