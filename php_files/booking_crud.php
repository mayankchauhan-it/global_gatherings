<?php
include('db_connections.php');

// Create Booking
if (isset($_POST['create_booking'])) {
    $booking_id = $_POST['booking_id'];
    $user_id = $_POST['user_id'];
    $booking_date = $_POST['booking_date'];

    $sql = "INSERT INTO bookings (booking_id, user_id, booking_date) 
            VALUES ('$booking_id', '$user_id', '$booking_date')";

    if ($conn->query($sql) === TRUE) {
        echo "New booking created successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    header('Location: booking_form.php');
    exit();
}

// Update Booking
if (isset($_POST['update_booking'])) {
    $booking_id = $_POST['booking_id'];
    $user_id = $_POST['user_id'];
    $ticket_id = $_POST['ticket_id'];
    $booking_date = $_POST['booking_date'];

    $sql = "UPDATE bookings SET user_id ='$user_id', ticket_id='$ticket_id', 
            booking_date='$booking_date' WHERE booking_id=$booking_id";

    if ($conn->query($sql) === TRUE) {
        echo "Booking updated successfully!";
    } else {
        echo "Error updating record: " . $conn->error;
    }
    header('Location: booking_form.php');
    exit();
}

// Delete Booking
if (isset($_GET['delete_booking'])) {
    $booking_id = $_GET['delete_booking'];
    $sql = "DELETE FROM bookings WHERE booking_id=$booking_id";

    if ($conn->query($sql) === TRUE) {
        echo "Booking deleted successfully!";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
    header('Location: booking_form.php');
    exit();
}

$conn->close();
?>
