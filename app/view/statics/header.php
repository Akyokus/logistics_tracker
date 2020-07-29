<!DOCTYPE html>
<html lang="en">
<head>
    <title>AdminX - The last Admin template you'll ever need</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="<?= public_url('css/adminx.css') ?>" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?= public_url('js/sweet/sweet.css') ?>" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?= public_url('js/swiper/swiper.css') ?>" media="screen" />

    <!--
      # Optional Resources
      Feel free to delete these if you don't need them in your project
    -->
</head>
<body>
<div class="adminx-container">
    <nav class="navbar navbar-expand justify-content-between fixed-top">
        <a class="navbar-brand mb-0 h1 d-none d-md-block" href="index.html">
            <img src="./demo/img/logo.png" class="navbar-brand-image d-inline-block align-top mr-2" alt="">
            NZR TRANSFER
        </a>



        <div class="d-flex flex-1 d-block d-md-none">
            <a href="#" class="sidebar-toggle ml-3">
                <i data-feather="menu"></i>
            </a>
        </div>

        <ul class="navbar-nav d-flex justify-content-end mr-2">
            <!-- Notificatoins -->
            <li class="nav-item dropdown d-flex align-items-center mr-2">

                <div class="dropdown-menu dropdown-menu-right dropdown-menu-notifications" aria-labelledby="dropdownNotifications">
                    <div class="notifications-header d-flex justify-content-between align-items-center">
                <span class="notifications-header-title">
                  Notifications
                </span>
                        <a href="#" class="d-flex"><small>Mark all as read</small></a>
                    </div>

                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action unread">
                            <p class="mb-1">Invitation for <strong>Lunch</strong> on <strong>Jan 12th 2018</strong> by <strong>Laura</strong></p>

                            <div class="mb-1">
                                <button type="button" class="btn btn-primary btn-sm">Accept invite</button>
                                <button type="button" class="btn btn-outline-danger btn-sm">Decline</button>
                            </div>

                            <small>1 hour ago</small>
                        </a>

                        <a href="#" class="list-group-item list-group-item-action">
                            <p class="mb-1"><strong class="text-success">Goal completed</strong><br />1,000 new members today</p>
                            <small>3 days ago</small>
                        </a>

                        <a href="#" class="list-group-item list-group-item-action">
                            <p class="mb-1 text-danger"><strong>System error detected</strong></p>
                            <small>3 days ago</small>
                        </a>

                        <a href="#" class="list-group-item list-group-item-action">
                            <p class="mb-1">Your task <strong>Design Draft</strong> is due today.</p>
                            <small>4 days ago</small>
                        </a>
                    </div>

                    <div class="notifications-footer text-center">
                        <a href="#"><small>View all notifications</small></a>
                    </div>
                </div>
            </li>
            <!-- Notifications -->
            <li class="nav-item dropdown">
                <a class="nav-link avatar-with-name" id="navbarDropdownMenuLink" data-toggle="dropdown" href="#">
                    <img src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/128.jpg" class="d-inline-block align-top" alt="">
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item text-danger" href="<?= site_url('logout') ?>">Çıkış Yap</a>
                </div>
            </li>
        </ul>
    </nav>
