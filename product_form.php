<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Download kareli css -->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
</head>



<body>

    <!-- First Row -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Bookstore</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="  navbar-collapse justify-content-end" id="navbarSupportedContent">
                <div class="me-3">
                    <h6>Admin</h6>
                </div>
                <button class="btn btn-danger" type="submit">Log Out</button>
            </div>
        </div>
    </nav>


    <!-- Main Body Section -->
    <div class="row">

        <!-- Side Bar Column -->
        <div class="col-2">
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <a class="nav-link" href="admin_index.html">
                        <span>Dashboard</span>
                    </a>
                </li>

                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link" href="#" >
                        <span>Products</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#" >
                        <span>Billing</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" >
                        <span>Accounting</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" >
                        <span>Inventory</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" >
                        <span>Settings</span>
                    </a>
                </li>

            </ul>
        </div>

        <!-- Content Column -->
        <div class="col-10 bg-light">

            <div class="row">
                <div class="col-12">
                    <h2>Product</h2>
                </div>
            </div>


            <div class="row">
                <div class="col-4">
                    <form action="#" method="POST">
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Product Name</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Price</label>
                          <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Image</label>
                            <input class="form-control" type="file" id="formFile">
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                    </form>
                </div>

                <div class="col-8 border">
                    <div class="row">
                        <div class="col-4 border">
                            <h6>Product Name</h6>
                        </div>
                        <div class="col-4 border">
                            <h6>Product Price</h6>
                        </div>
                        <div class="col-4 border">
                            <h6>Product Image Name</h6>
                        </div>
                    </div>
                    <!-- Data -->
                    <div class="row">
                        <div class="col-4 border border-warning">
                            <h6>Book 1</h6>
                        </div>
                        <div class="col-4 border border-warning">
                            <h6>15/-</h6>
                        </div>
                        <div class="col-4 border border-warning">
                            <h6>book.jpg</h6>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4 border border-warning">
                            <h6>Book 2</h6>
                        </div>
                        <div class="col-4 border border-warning">
                            <h6>0/-</h6>
                        </div>
                        <div class="col-4 border border-warning">
                            <h6>book.jpg</h6>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="assets/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="assets/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="assets/js/demo/chart-area-demo.js"></script>
<script src="assets/js/demo/chart-pie-demo.js"></script>

</html>