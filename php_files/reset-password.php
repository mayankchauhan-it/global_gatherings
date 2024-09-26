<?php
if (isset($_GET['email'])) {
    $email = $_GET['email'];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include 'db_connections.php'; // Your database connection script

        $new_password = password_hash($_POST['new_password'], PASSWORD_DEFAULT);
        $confirm_password = $_POST['confirm_password'];
        
        if ($_POST['new_password'] === $confirm_password) {
            // Update the user's password in the database
            $update_query = "UPDATE user SET u_pw='$new_password' WHERE email_id='$email'";
            if (mysqli_query($conn, $update_query)) {
                echo "Your password has been reset successfully. You can now <a href='loginindex.php'>login</a>.";
            } else {
                echo "Failed to reset password. Please try again.";
            }
        } else {
            echo "Passwords do not match!";
        }
    }
} else {
    echo "No email provided!";
}
?>

<form method="POST" action="">
    <label for="new_password">Enter new password:</label>
    <input type="password" name="new_password" required>
    
    <label for="confirm_password">Confirm new password:</label>
    <input type="password" name="confirm_password" required>
    
    <input type="submit" value="Reset Password">
</form>
