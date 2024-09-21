<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Management</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .sidebar {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            z-index: 100;
            height: 100%;
            width: 250px;
            background-color: #343a40;
            color: #fff;
            padding-top: 20px;
        }
        .sidebar a {
            color: #adb5bd;
            display: block;
            padding: 10px 15px;
            text-decoration: none;
        }
        .sidebar a:hover {
            color: #fff;
            background-color: #495057;
        }
        .main-content {
            margin-left: 250px;
            padding: 20px;
        }
        .card-header {
            background-color: #007bff;
            color: white;
            font-weight: bold;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }
        .btn-danger:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }
        .table thead th {
            background-color: #007bff;
            color: white;
        }
        .table tbody tr:nth-child(even) {
            background-color: #e9ecef;
        }
        .form-label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h4 class="text-center mb-4">Admin Panel</h4>
        <a href="event_form.php">Events</a>
        <a href="feedback_form.php">Feedback</a>
        <a href="contactus_form.php">Contact Us</a>
        <a href="reservation_form.php">Reservations</a>
        <a href="t_category_form.php">Categories</a>
        <a href="admin_form.php">Admin</a>
    </div>

    <div class="main-content">
        <h2 class="mb-4 text-center">Event Management</h2>

        <!-- Event Form -->
        <div class="card mb-4">
            <div class="card-header">
                <h4>Add New Event</h4>
            </div>
            <div class="card-body">
                <form action="event.php" method="POST">
                    <input type="hidden" name="create_event" value="1">
                    <div class="mb-3">
                        <label for="e_nm" class="form-label">Event Name</label>
                        <input type="text" id="e_nm" name="e_nm" class="form-control" placeholder="Enter event name" required>
                    </div>
                    <div class="mb-3">
                        <label for="i_id" class="form-label">Item ID</label>
                        <input type="number" id="i_id" name="i_id" class="form-control" placeholder="Enter item ID" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Event</button>
                </form>
            </div>
        </div>

        <!-- Event List -->
        <div class="card">
            <div class="card-header">
                <h4>Event List</h4>
            </div>
            <div class="card-body">
                <!-- Add php code here -->

                
                <?php
                include('db.php');

                // Fetch events
                $sql = "SELECT * FROM event";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    echo "<table class='table table-striped'>";
                    echo "<thead><tr><th>ID</th><th>Name</th><th>Item ID</th><th>Actions</th></tr></thead>";
                    echo "<tbody>";
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['e_id'] . "</td>";
                        echo "<td>" . $row['e_nm'] . "</td>";
                        echo "<td>" . $row['i_id'] . "</td>";
                        echo "<td>
                                <a href='update_event_form.php?e_id=" . $row['e_id'] . "' class='btn btn-warning btn-sm'>Update</a> 
                                <a href='event.php?delete_event=" . $row['e_id'] . "' class='btn btn-danger btn-sm' onclick='return confirm(\"Are you sure?\")'>Delete</a>
                              </td>";
                        echo "</tr>";
                    }
                    echo "</tbody>";
                    echo "</table>";
                } else {
                    echo "<p class='text-muted'>No events found.</p>";
                }

                $conn->close();
                ?>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
</body>
</html>
