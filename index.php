<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hospital Management System</title>
    <link rel="shortcut icon" href="../assets/images/logo/favicon.png" type="image/x-icon">

    <!-- Vendor CSS (reused assets) -->
    <link rel="stylesheet" href="assets/css/animate-3.7.0.css">
    <link rel="stylesheet" href="assets/css/font-awesome-4.7.0.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-4.1.3.min.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.min.css">
    <link rel="stylesheet" href="assets/css/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="assets/css/linearicons.css">

    <!-- Inline styles replacing style.css -->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Roboto', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            color: #333;
            line-height: 1.7;
            background: #fff;
        }
        a {
            text-decoration: none;
            color: inherit;
            transition: 0.3s;
        }
        ul {
            list-style: none;
        }
        .container {
            width: 100%;
            max-width: 1140px;
            margin: 0 auto;
            padding: 0 15px;
        }
        .row {
            display: flex;
            flex-wrap: wrap;
            margin: 0 -15px;
        }
        .col-lg-8 {
            flex: 0 0 66.666667%;
            max-width: 66.666667%;
            padding: 0 15px;
        }
        .align-items-center { align-items: center; }
        .justify-content-between { justify-content: space-between; }
        .d-flex { display: flex; }

        /* Preloader */
        .preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #fff;
            z-index: 99999;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: opacity 0.4s ease;
        }
        .preloader .spinner {
            width: 40px;
            height: 40px;
            border: 4px solid #f3f3f3;
            border-top: 4px solid #2c7be5;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Header */
        .header-area {
            background: #fff;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.05);
            padding: 18px 0;
            position: sticky;
            top: 0;
            z-index: 999;
        }
        #logo a {
            display: block;
            width: 130px;
            height: 45px;
            background: url('../assets/images/logo/logo.png') no-repeat left center / contain;
        }
        .nav-menu {
            display: flex;
            align-items: center;
        }
        .nav-menu li {
            margin-left: 35px;
        }
        .nav-menu li a {
            font-size: 15px;
            font-weight: 500;
            color: #2c3e50;
            letter-spacing: 0.3px;
            position: relative;
            padding-bottom: 4px;
        }
        .nav-menu li a::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 0;
            height: 2px;
            background: #2c7be5;
            transition: width 0.3s ease;
        }
        .nav-menu li a:hover::after,
        .nav-menu li.menu-active a::after {
            width: 100%;
        }
        .nav-menu li a:hover,
        .nav-menu li.menu-active a {
            color: #2c7be5;
        }

        /* Banner */
        .banner-area {
            background: linear-gradient(135deg, #f0f6ff 0%, #e6f0fb 100%);
            padding: 140px 0;
            position: relative;
            overflow: hidden;
        }
        .banner-area::before {
            content: '';
            position: absolute;
            top: -50px;
            right: -50px;
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, rgba(44, 123, 229, 0.08) 0%, transparent 70%);
            border-radius: 50%;
        }
        .banner-area h4 {
            font-size: 20px;
            font-weight: 500;
            color: #2c7be5;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 18px;
        }
        .banner-area h1 {
            font-size: 52px;
            font-weight: 700;
            line-height: 1.2;
            color: #1a2b3c;
            margin-bottom: 25px;
        }
        .banner-area p {
            font-size: 16px;
            line-height: 1.9;
            color: #5a6a7a;
            max-width: 720px;
        }

        /* Responsive */
        @media (max-width: 991px) {
            .col-lg-8 { flex: 0 0 100%; max-width: 100%; }
            .banner-area h1 { font-size: 38px; }
            .banner-area { padding: 90px 0; }
        }
        @media (max-width: 767px) {
            .row { flex-direction: column; align-items: flex-start !important; }
            #logo { margin-bottom: 15px; }
            .nav-menu { flex-wrap: wrap; }
            .nav-menu li { margin-left: 0; margin-right: 20px; margin-bottom: 8px; }
            .banner-area h1 { font-size: 30px; }
            .banner-area h4 { font-size: 16px; }
        }
    </style>
</head>
<body>
    <!-- Preloader -->
    <div class="preloader" id="preloader">
        <div class="spinner"></div>
    </div>

    <!-- Header -->
    <header class="header-area">
        <div id="header">
            <div class="container">
                <div class="row align-items-center justify-content-between d-flex">
                    <div id="logo">
                        <a href="/home"></a>
                    </div>
                    <nav id="nav-menu-container">
                        <ul class="nav-menu">
                            <li class="menu-active"><a href="index">Home</a></li>
                            <li><a href="doc/dashboard">Doctor's Portal</a></li>
                            <li><a href="admin/dashboard">Administrator Portal</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <!-- Banner -->
    <section class="banner-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h4>Caring for better life</h4>
                    <h1>Leading the way in medical excellence</h1>
                    <p>HMS is awarded as one of the Top Hospital Management System, which can integrate all the HIS systems, processes and machines into an intelligent information system to derive operational efficiency and assist hospitals in decision making process through MIS and Analytics.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Vendor JS (reused assets) -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="assets/js/vendor/bootstrap-4.1.3.min.js"></script>
    <script src="assets/js/vendor/wow.min.js"></script>
    <script src="assets/js/vendor/owl-carousel.min.js"></script>
    <script src="assets/js/vendor/jquery.datetimepicker.full.min.js"></script>
    <script src="assets/js/vendor/jquery.nice-select.min.js"></script>
    <script src="assets/js/vendor/superfish.min.js"></script>

    <!-- Inline script replacing main.js -->
    <script>
        (function ($) {
            'use strict';

            // Hide preloader when page is fully loaded
            $(window).on('load', function () {
                $('#preloader').fadeOut(400, function () {
                    $(this).remove();
                });
            });

            // Fallback in case load event already fired
            setTimeout(function () {
                $('#preloader').fadeOut(400, function () {
                    $(this).remove();
                });
            }, 1500);

            // Init WOW.js animations if present
            if (typeof WOW !== 'undefined') {
                new WOW().init();
            }
        })(jQuery);
    </script>
</body>
</html>