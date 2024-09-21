<?php
include('db_connections.php');

// Create Festival
if (isset($_POST['create_festival'])) {
    $festival_name = $_POST['festival_name'];
    $start_date = $_POST['start_date']; // Updated field
    $festival_description = $_POST['festival_description'];

    $sql = "INSERT INTO festivals (festival_name, start_date, festival_description) 
            VALUES ('$festival_name', '$start_date', '$festival_description')";

    if ($conn->query($sql) === TRUE) {
        echo "New festival created successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    header('Location: festival_form.php');
    exit();
}

// Update Festival
if (isset($_POST['update_festival'])) {
    $festival_id = $_POST['festival_id'];
    $festival_name = $_POST['festival_name'];
    $start_date = $_POST['start_date']; // Updated field
    $festival_description = $_POST['festival_description'];

    $sql = "UPDATE festivals SET festival_name='$festival_name', start_date='$start_date', 
            festival_description='$festival_description' WHERE festival_id=$festival_id";

    if ($conn->query($sql) === TRUE) {
        echo "Festival updated successfully!";
    } else {
        echo "Error updating record: " . $conn->error;
    }
    header('Location: festival_form.php');
    exit();
}

// Delete Festival
if (isset($_GET['delete_festival'])) {
    $festival_id = $_GET['delete_festival'];
    $sql = "DELETE FROM festivals WHERE festival_id=$festival_id";

    if ($conn->query($sql) === TRUE) {
        echo "Festival deleted successfully!";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
    header('Location: festival_form.php');
    exit();
}

$conn->close();
?>
