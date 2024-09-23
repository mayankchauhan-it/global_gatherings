<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Festival CRUD</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <link href="https://demo.dashboardpack.com/architectui-html-free/main.css" rel="stylesheet">
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <?php include '../admin_files/header.php'; ?>
        <div class="app-main">
            <div class="app-sidebar sidebar-shadow bg-warning sidebar-text-dark">
                <?php include '../admin_files/sidebar_items.php'; ?>
            </div>
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="fa fa-list text-warning"></i>
                                </div>
                                <h2>Festival Management</h2>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Add New Festival Form -->
                        <!-- <div class="col-md-6 col-xl-6 rounded"> -->
                        <div class="container">
                            <div class="card mb-3">
                                <div class="card-header bg-warning text-white">
                                    <h5>Add New Festival</h5>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="festival_name">Festival Name</label>
                                            <input type="text" class="form-control" id="festival_name" name="festival_name" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="start_date">Start Date</label>
                                            <input type="date" class="form-control" id="start_date" name="start_date" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="end_date">End Date</label>
                                            <input type="date" class="form-control" id="end_date" name="end_date" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="price">Price</label>
                                            <input type="number" class="form-control" id="price" name="price" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="venue">Venue</label>
                                            <input type="text" class="form-control" id="venue" name="venue" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="festival_description">Description</label>
                                            <textarea class="form-control" id="festival_description" name="festival_description" required></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="category_id">Category</label>
                                            <select class="form-control" id="category_id" name="category_id">
                                                <!-- Populate options from database -->
                                                <?php
                                                    include('../php_files/db_connections.php');
                                                    $sql = "SELECT * FROM categories";
                                                    $result = $conn->query($sql);
                                                    if ($result->num_rows > 0) {
                                                        while ($row = $result->fetch_assoc()) {
                                                            echo "<option value='" . $row['category_id'] . "'>" . $row['category_name'] . "</option>";
                                                        }
                                                    }
                                                ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="image">Festival Image</label>
                                            <input type="file" class="form-control" id="image" name="image" required>
                                        </div>

                                        <button type="submit" name="create_festival" class="btn btn-warning btn-block font-weight-bold">Add Festival</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Display Existing Festivals -->
                   <!-- <--     <div class="col-md-6">
                            <div class="card">
                                <div class="card-header bg-warning text-white">Existing Festivals</div>
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Festival Name</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $sql = "SELECT f.*, c.category_name FROM festivals f INNER JOIN categories c ON f.category_id = c.category_id";
                                                $result = $conn->query($sql);
                                                if ($result->num_rows > 0) {
                                                    while ($row = $result->fetch_assoc()) {
                                                        echo "<tr>";
                                                        echo "<td>" . $row['festival_name'] . "</td>";
                                                        echo "<td>
                                                                <a href='../php_files/category_crud.php?delete_festival=" . $row['festival_id'] . "' class='btn btn-danger'>Delete</a>
                                                              </td>";
                                                        echo "</tr>";
                                                    }
                                                } else {
                                                    echo "<tr><td colspan='2'>No festivals found.</td></tr>";
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>  -->
                    </div>
                </div>

                <div class="app-wrapper-footer">
                    <div class="app-footer__inner">
                        <div class="app-footer-left">
                            <h6>Global Gatherings</h6>
                        </div>
                        <div class="app-footer-right">
                            <h6>Powered by Love</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    // PHP logic for inserting festival into the database
    if (isset($_POST['create_festival'])) {
        $festival_name = $_POST['festival_name'];
        $start_date = $_POST['start_date'];
        $end_date = $_POST['end_date'];
        $price = $_POST['price'];
        $venue = $_POST['venue'];
        $festival_description = $_POST['festival_description'];
        $category_id = $_POST['category_id'];
        
        // Handle image upload
        $image = $_FILES['image']['name'];
        $target_dir = "../uploads/";
        $target_file = $target_dir . basename($image);
        move_uploaded_file($_FILES['image']['tmp_name'], $target_file);

        // SQL Insert Query
        $sql = "INSERT INTO festivals (festival_name, start_date, end_date, price, venue, festival_description, category_id, image) 
                VALUES ('$festival_name', '$start_date', '$end_date', '$price', '$venue', '$festival_description', '$category_id', '$image')";

        if ($conn->query($sql) === TRUE) {
            echo "New festival created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    ?>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
