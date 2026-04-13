<?php

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get values
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Create error array
    $errors = [];

    // Validate Name
    if (empty($name)) {
        $errors[] = "Name is required";
    }

    // Validate Email
    if (empty($email)) {
        $errors[] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }

    // Validate Password
    if (empty($password)) {
        $errors[] = "Password is required";
    } elseif (strlen($password) < 6) {
        $errors[] = "Password must be at least 6 characters";
    }

    // Check errors
    if (!empty($errors)) {
        echo "<h3>Errors:</h3>";
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
    } else {
        echo "<h3 style='color:green;'>Form submitted successfully!</h3>";

        echo "Name: " . htmlspecialchars($name) . "<br>";
        echo "Email: " . htmlspecialchars($email);
    }

} else {
    die('Used GET method instead. Which is not allowed in this case');
}
?>