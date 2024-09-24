<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Ticket Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="Ticket form example with various fields.">
    <meta name="msapplication-tap-highlight" content="no">
    <link href="https://demo.dashboardpack.com/architectui-html-free/main.css" rel="stylesheet">
    <style>
        .modal-backdrop {
            z-index: 1050 !important;
        }

        .modal {
            z-index: 1051 !important;
        }
    </style>
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow bg-warning header-text-dark">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__content">
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                        Alina Mclourd
                                    </div>
                                </div>
                                <div class="widget-content-right header-user-info ml-3">
                                    <a class="text-white btn-shadow p-1 btn btn-danger btn-sm" href="../php_files/logout.php">Log Out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                                <a href="tickets.php" class="mm-active">
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
                                    <i class="fa fa-ticket-alt text-warning"></i>
                                </div>
                                <h2>Create Ticket</h2>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="container">
                            <div class="card mb-3">
                                <div class="card-header bg-warning text-white">
                                    <h5>Ticket Details</h5>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="../php_files/ticket_crud.php" enctype="multipart/form-data">
                                        <!-- Ticket ID -->
                                        <div class="form-group">
                                            <label for="ticket_id">Ticket ID</label>
                                            <input type="number" class="form-control" id="ticket_id" name="ticket_id" placeholder="Enter ticket ID" required>
                                        </div>

                                        <!-- Event ID -->
                                        <div class="form-group">
                                            <label for="event_name">Event Name</label>
                                            <input type="number" class="form-control" id="event_name" name="event_name" placeholder="Enter Event Name" required>
                                        </div>

                                        <!-- Festival ID -->
                                        <div class="form-group">
                                            <label for="festival_id">Festival ID</label>
                                            <input type="number" class="form-control" id="festival_id" name="festival_id" placeholder="Enter festival ID" required>
                                        </div>

                                        <!-- Ticket Type -->
                                        <div class="form-group">
                                            <label for="ticket_type">Ticket Type</label>
                                            <input type="text" class="form-control" id="ticket_type" name="ticket_type" placeholder="Enter ticket type (e.g., VIP, Regular)" required>
                                        </div>

                                        <!-- Price -->
                                        <div class="form-group">
                                            <label for="price">Price</label>
                                            <input type="number" class="form-control" id="price" name="price" placeholder="Enter ticket price" required>
                                        </div>

                                        <!-- Quantity -->
                                        <div class="form-group">
                                            <label for="quantity">Quantity</label>
                                            <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Enter quantity available" required>
                                        </div>

                                        <!-- Availability -->
                                        <div class="form-group">
                                            <label for="availability">Availability</label>
                                            <select class="form-control" id="availability" name="availability" required>
                                                <option value="">Select Availability</option>
                                                <option value="available">Available</option>
                                                <option value="sold out">Sold Out</option>
                                            </select>
                                        </div>

                                        <button type="submit" name="create_ticket" class="btn btn-warning btn-block font-weight-bold">Create Ticket</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="app-wrapper-footer">
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

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>

</html>
