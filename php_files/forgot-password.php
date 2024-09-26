<?php
    include 'db_connections.php'; // Your database connection script
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    
    // Check if email exists in the database
    $query = "SELECT * FROM user WHERE email_id='$email'";
    $result = mysqli_query($conn, $query);
    
    if (mysqli_num_rows($result) > 0) {
        // Redirect to reset password page with email as query parameter
        header("Location: php_files/reset-password.php?email=" . urlencode($email));
        exit;
    } else {
        echo "This email is not registered!";
    }
}
?>

<form method="POST" action="">
    <label for="email">Enter your registered email:</label>
    <input type="email" name="email" required>
    <input type="submit" value="Submit">
</form>
