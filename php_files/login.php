<?php
// Start the session
session_start();

// // Database configuration
// $servername = "localhost";
// $username = "root"; // Default XAMPP MySQL username
// $password = ""; // Default XAMPP MySQL password
// $dbname = "gg"; // Your database name

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);

// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// Include the database connection
include '../php_files/db_connections.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input data
    $email = $conn->real_escape_string($_POST['email']);
    $password = $_POST['password'];

    // Prepare SQL statement to fetch user details, including is_admin status
    $sql = "SELECT * FROM user WHERE email_id='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Fetch the user data
        $row = $result->fetch_assoc();
        $hashed_password = $row['u_pw'];

        // Verify the password
        if (password_verify($password, $hashed_password)) {
            // Password is correct, start a session
            $_SESSION['user_id'] = $row['u_id'];
            $_SESSION['email'] = $email;
            $_SESSION['is_admin'] = $row['is_admin']; // Store the admin status in session

            // Check if the user is an admin
            if ($_SESSION['is_admin'] == 1) {
                // Redirect to admin page if the user is admins
                header("Location: ../admin_files/admin_index.php");
                exit();
            } else {
                // Redirect to regular user page
                header("Location: ../new_index.php");
                exit();
            }
        } else {
            echo "Invalid email or password.";
        }
    } else {
        echo "No user found with this email.";
    }

    // Close connection
    $conn->close();
}
?>
