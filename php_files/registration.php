<?php

include '../php_files/db_connections.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input data and ensure required fields are not empty
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = $_POST['password'];

    // Required fields validation
    if (empty($name) || empty($email) || empty($password)) {
        die("Name, email, and password are required fields.");
    }

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    // Optional fields (allowing null values if not provided)
    $address = !empty($_POST['address']) ? $conn->real_escape_string($_POST['address']) : NULL;
    $city = !empty($_POST['city']) ? $conn->real_escape_string($_POST['city']) : NULL;
    $state = !empty($_POST['state']) ? $conn->real_escape_string($_POST['state']) : NULL;
    $phoneno = !empty($_POST['phoneno']) ? $conn->real_escape_string($_POST['phoneno']) : NULL;

    // Prepare SQL statement
    $stmt = $conn->prepare("INSERT INTO user (u_nm, u_pw, address, city, state, phoneno, email_id) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $name, $hashed_password, $address, $city, $state, $phoneno, $email);

    if ($stmt->execute()) {
        echo "New record created successfully";
        // Redirect to login or another page
        header("Location: ../new_index.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close connection
    $stmt->close();
    $conn->close();
}
?>
