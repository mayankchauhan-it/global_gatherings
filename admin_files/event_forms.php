<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Event Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="Event form example with various fields.">
    <meta name="msapplication-tap-highlight" content="no">
    <link href="https://demo.dashboardpack.com/architectui-html-free/main.css" rel="stylesheet">
    <style>
        .modal-backdrop {
            z-index: 1050 !important;
        }

        .modal {
            z-index: 1051 !important;
        }

        .logo {
            line-height: 80px;
            color :#656c74;
            font-size: 28px;
            font-weight: 700;
            float: left;
        }
    </style>
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        
           <?php
           include '../'
        <div class="app-main">
            <div class="app-sidebar sidebar-shadow bg-warning sidebar-text-dark">
                <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu">
                            <li class="app-sidebar__heading">Accounts</li>
                            <li>
                                <a href="admin_index.php" class="">
                                    <i class="metismenu-icon pe-7s-user"></i>
                                    Users
                                </a>
                            </li>
                            <li class="app-sidebar__heading">Data</li>
                            <li>
                                <a href="category_form.php" class="">
                                    <i class="metismenu-icon pe-7s-check"></i>
                                    Category
                                </a>
                            </li>
                            <li>
                                <a href="events.php" class="">
                                    <i class="metismenu-icon pe-7s-check"></i>
                                    Events
                                </a>
                            </li>
                            <li>
                                <a href="festivals.php" class="">
                                    <i class="metismenu-icon pe-7s-check"></i>
                                    Festivals
                                </a>
                            </li>
                            <li>
                                <a href="bookings.php" class="">
                                    <i class="metismenu-icon pe-7s-check"></i>
                                    Bookings
                                </a>
                            </li>
                            <li>
                                <a href="tickets.php" class="">
                                    <i class="metismenu-icon pe-7s-check"></i>
                                    Tickets
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="fa fa-calendar-alt text-warning"></i>
                                </div>
                                <h2>Create Event</h2>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="container">
                            <div class="card mb-3">
                                <div class="card-header bg-warning text-white">
                                    <h5>Event Details</h5>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="../php_files/event_crud.php" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="category_id">Category ID</label>
                                            <!-- <input type="number" class="form-control" id="category_id" name="category_id" placeholder="Enter category ID" required> -->
                                            <select class="form-control" id="category" name="category" required>
                                                <option value="">Select Category</option>
                                                <option value="music">Music</option>
                                                <option value="culture">Culture</option>
                                            </select>
                                        </div>
<!-- 
                                        <div class="form-group">
                                            <label for="event_id">Event ID</label>
                                            <input type="text" class="form-control" id="event_id" name="event_id" placeholder="Enter event ID" required>
                                        </div> -->

                                        <div class="form-group">
                                            <label for="event_name">Event Name</label>
                                            <input type="text" class="form-control" id="event_name" name="event_name" placeholder="Enter event name" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="event_date">Event Date</label>
                                            <input type="date" class="form-control" id="event_date" name="event_date" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="event_time">Event Time</label>
                                            <input type="time" class="form-control" id="event_time" name="event_time" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="venue">Venue</label>
                                            <input type="text" class="form-control" id="venue" name="venue" placeholder="Enter venue" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="price">Price</label>
                                            <input type="number" class="form-control" id="price" name="price" placeholder="Enter price" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="event_description">Event Description</label>
                                            <textarea class="form-control" id="event_description" name="event_description" placeholder="Describe the event" required></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="image">Event Image</label>
                                            <input type="file" class="form-control" id="image" name="image" required>
                                        </div>

                                        <button type="submit" name="create_event" class="btn btn-warning btn-block font-weight-bold">Create Event</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>

</html>
