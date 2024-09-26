<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Manage Bookings</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 90%;
            margin: 50px auto;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            margin-top: 20px;
        }

        table th, table td {
            padding: 15px;
            border: 1px solid #ddd;
            text-align: left;
        }

        table th {
            background-color: #4CAF50;
            color: white;
        }

        table tr:hover {
            background-color: #f1f1f1;
        }

        .action-buttons {
            display: flex;
            gap: 10px;
        }

        .btn {
            padding: 8px 12px;
            border: none;
            color: white;
            cursor: pointer;
        }

        .edit-btn {
            background-color: #ffa500;
        }

        .delete-btn {
            background-color: #ff3333;
        }

        .add-btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            margin-bottom: 20px;
            display: inline-block;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Manage Bookings</h1>

        <!-- Add New Booking Button -->
        <a href="#" class="add-btn">Add New Booking</a>

        <!-- Booking Table -->
        <table>
            <thead>
                <tr>
                    <th>Booking ID</th>
                    <th>User Name</th>
                    <th>Event Name</th>
                    <th>No. of Tickets</th>
                    <th>Total Price</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>Concert Night</td>
                    <td>2</td>
                    <td>$50</td>
                    <td>Confirmed</td>
                    <td class="action-buttons">
                        <button class="btn edit-btn"><i class="fas fa-edit"></i> Edit</button>
                        <button class="btn delete-btn"><i class="fas fa-trash"></i> Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Jane Smith</td>
                    <td>Trade Show</td>
                    <td>3</td>
                    <td>$75</td>
                    <td>Pending</td>
                    <td class="action-buttons">
                        <button class="btn edit-btn"><i class="fas fa-edit"></i> Edit</button>
                        <button class="btn delete-btn"><i class="fas fa-trash"></i> Delete</button>
                    </td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>
</body>

</html>
