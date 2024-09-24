<?php
    // Get the current page name from the URL
    $current_page = basename($_SERVER['PHP_SELF']);
?>

<div class="scrollbar-sidebar">
    <div class="app-sidebar__inner">
        <ul class="vertical-nav-menu">
            <li class="app-sidebar__heading">Accounts</li>
            <li>
                <a href="admin_index.php" class="<?php echo ($current_page == 'admin_index.php') ? 'mm-active' : ''; ?>">
                    <i class="metismenu-icon pe-7s-user"></i>
                    Users
                </a>
            </li>
            <li class="app-sidebar__heading">Data</li>
            <li>
                <a href="category_form.php" class="<?php echo ($current_page == 'category_form.php') ? 'mm-active' : ''; ?>">
                    <i class="metismenu-icon pe-7s-check"></i>
                    Category
                </a>
            </li>
            <li>
                <a href="event_forms.php" class="<?php echo ($current_page == 'events.php') ? 'mm-active' : ''; ?>">
                    <i class="metismenu-icon pe-7s-check"></i>
                    Events
                </a>
            </li>
            <li>
                <a href="festivals.php" class="<?php echo ($current_page == 'festivals.php') ? 'mm-active' : ''; ?>">
                    <i class="metismenu-icon pe-7s-check"></i>
                    Festivals
                </a>
            </li>
            <li>
                <a href="bookings.php" class="<?php echo ($current_page == 'bookings.php') ? 'mm-active' : ''; ?>">
                    <i class="metismenu-icon pe-7s-check"></i>
                    Bookings
                </a>
            </li>
            <li>
                <a href="tickets.php" class="<?php echo ($current_page == 'tickets.php') ? 'mm-active' : ''; ?>">
                    <i class="metismenu-icon pe-7s-check"></i>
                    Tickets
                </a>
            </li>
        </ul>
    </div>
</div>
