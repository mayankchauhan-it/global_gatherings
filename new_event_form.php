<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="login/style.css">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> 
           <!--https://boxicons.com/ -->

    <title>Login & Register Page  ->> Our Culture</title>

    <style>
        /* Basic styling */
        .password-container {
            width: 100%;
            position: relative;
            display: flex;
            align-items: center;
        }
        .password-container input[type="password"],
        .password-container input[type="text"] {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
        }
        .password-container .eye-icon {
            position: absolute;
            right: 10px;
            cursor: pointer;
            user-select: none;
        }
    </style>
</head>

<body>

    <div class="container" id="container">
            <form action="event.php" method="POST">
            <input type="hidden" name="create_event" value="1">
                <h1>Create Event</h1>
                <input type="text" name="e_nm" placeholder="Event Name">
                <input type="text" name="i_id" placeholder="Event ID">
                <input type="text" placeholder="Enter Location">
                <input type="date" class="form-date">
                <input type="time" class="form-time">
                <input type="number" class="form-input" placeholder="Total Available Tickets">
                <button type="submit" class="btn btn-primary">Add Event</button>
            </form>
    </div>



</body>

</html>