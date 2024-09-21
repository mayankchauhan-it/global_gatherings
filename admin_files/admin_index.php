<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Analytics Dashboard - This is an example dashboard created using build-in elements and components.</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <link href="https://demo.dashboardpack.com/architectui-html-free/main.css" rel="stylesheet">
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <?php
            include '../admin_files/header.php'
        ?>
        <!-- Theme Setting button -->
        <?php
            // include '../admin_files/theme_setting.php';
        ?>

        <div class="app-main">
            <div class="app-sidebar sidebar-shadow bg-warning sidebar-text-dark">
                <?php
                    include '../admin_files/sidebar_items.php'
                ?>
            </div>
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <!-- Area for Title -->
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="fa fa-user text-warning">
                                    </i>
                                </div>
                                <h2>Admin Dashboard</h2>
                            </div>
                        </div>
                    </div>


                    <!-- Area for Forms -->
                    <div class="row">
                        <div class="col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content bg-warning">
                                <div class="widget-content-wrapper text-white">
                                    <div class="widget-content-left">
                                        <div><h4 class="widget-heading">Total Events</h4></div>
                                    </div>
                                    <div class="widget-content-right">
                                        <h4 class="widget-numbers text-white"><span class="text-dark">52</span></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content bg-warning">
                                <div class="widget-content-wrapper text-white">
                                    <div class="widget-content-left">
                                        <h4 class="widget-heading">Total Fesetivals</h4>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-white"><span class="text-dark">32</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content bg-warning">
                                <div class="widget-content-wrapper text-white">
                                    <div class="widget-content-left">
                                        <h4 class="widget-heading">Total Bookings</h4>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-white"><span class="text-dark">120</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Area for admin footer -->
                <div class="app-wrapper-footer">
                    <div class="app-footer">
                        <div class="app-footer__inner">
                            <div class="app-footer-left">
                                <h6>Global Gatherings</h6>
                            </div>
                            <div class="app-footer-right">
                                <h6>Made with Love</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
    </div>
    <script type="text/javascript"
        src="https://demo.dashboardpack.com/architectui-html-free/assets/scripts/main.js"></script>

        
</body>

</html>
