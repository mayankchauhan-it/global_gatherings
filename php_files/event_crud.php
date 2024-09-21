<?php
include('db_connections.php');

// Create Event
if (isset($_POST['create_event'])) {
    $event_name = $_POST['event_name'];
    $event_date = $_POST['event_date'];
    $event_description = $_POST['event_description'];

    $sql = "INSERT INTO events (event_name, event_date, event_description) 
            VALUES ('$event_name', '$event_date', '$event_description')";

    if ($conn->query($sql) === TRUE) {
        echo "New event created successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    header('Location: event_form.php');
    exit();
}

// Update Event
if (isset($_POST['update_event'])) {
    $event_id = $_POST['event_id'];
    $event_name = $_POST['event_name'];
    $event_date = $_POST['event_date'];
    $event_description = $_POST['event_description'];

    $sql = "UPDATE events SET event_name='$event_name', event_date='$event_date', 
            event_description='$event_description' WHERE event_id=$event_id";

    if ($conn->query($sql) === TRUE) {
        echo "Event updated successfully!";
    } else {
        echo "Error updating record: " . $conn->error;
    }
    header('Location: event_form.php');
    exit();
}

// Delete Event
if (isset($_GET['delete_event'])) {
    $event_id = $_GET['delete_event'];
    $sql = "DELETE FROM events WHERE event_id=$event_id";

    if ($conn->query($sql) === TRUE) {
        echo "Event deleted successfully!";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
    header('Location: event_form.php');
    exit();
}

$conn->close();
?>
