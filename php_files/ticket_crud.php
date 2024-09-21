<?php
include('db_connections.php');

// Create Ticket
if (isset($_POST['create_ticket'])) {
    $ticket_id = $_POST['ticket_id'];
    $event_id = $_POST['event_id'];
    $festival_id = $_POST['festival_id'];
    $ticket_type = $_POST['ticket_type'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    $sql = "INSERT INTO tickets (ticket_id,event_id,festival_id, ticket_type, price, quantity) 
            VALUES ('$festival_id', '$ticket_type', '$price', '$quantity')";

    if ($conn->query($sql) === TRUE) {
        echo "New ticket created successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    header('Location: ticket_form.php');
    exit();
}

// Update Ticket
if (isset($_POST['update_ticket'])) {
    $ticket_id = $_POST['ticket_id'];
    $festival_id = $_POST['festival_id'];
    $ticket_type = $_POST['ticket_type'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    $sql = "UPDATE tickets SET festival_id='$festival_id', ticket_type='$ticket_type', 
            price='$price', quantity='$squantity' WHERE ticket_id=$ticket_id";

    if ($conn->query($sql) === TRUE) {
        echo "Ticket updated successfully!";
    } else {
        echo "Error updating record: " . $conn->error;
    }
    header('Location: ticket_form.php');
    exit();
}

// Delete Ticket
if (isset($_GET['delete_ticket'])) {
    $ticket_id = $_GET['delete_ticket'];
    $sql = "DELETE FROM tickets WHERE ticket_id=$ticket_id";

    if ($conn->query($sql) === TRUE) {
        echo "Ticket deleted successfully!";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
    header('Location: ticket_form.php');
    exit();
}

$conn->close();
?>
