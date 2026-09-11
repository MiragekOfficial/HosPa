<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hospital Management System</title>
    <link rel="shortcut icon" href="../assets/images/logo/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/animate-3.7.0.css">
    <link rel="stylesheet" href="assets/css/font-awesome-4.7.0.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-4.1.3.min.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.min.css">
    <link rel="stylesheet" href="assets/css/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="assets/css/linearicons.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Roboto', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            color: #1e2a3a;
            line-height: 1.7;
            background: #fafcff;
            -webkit-font-smoothing: antialiased;
            overflow-x: hidden;
        }
        a {
            text-decoration: none;
            color: inherit;
            transition: color 0.25s ease;
        }
        ul {
            list-style: none;
            padding-left: 0;
        }
        img, svg {
            max-width: 100%;
            height: auto;
        }

        .container {
            width: 100%;
            max-width: 1180px;
            margin: 0 auto;
            padding: 0 24px;
        }
        .row {
            display: flex;
            flex-wrap: wrap;
            margin: 0 -12px;
        }
        [class*="col-"] {
            width: 100%;
            padding: 0 12px;
            flex: 0 0 100%;
            max-width: 100%;
        }
        @media (min-width: 992px) {
            .col-lg-7 {
                flex: 0 0 58.333333%;
                max-width: 58.333333%;
            }
            .col-lg-5 {
                flex: 0 0 41.666667%;
                max-width: 41.666667%;
            }
        }
        .align-items-center { align-items: center; }
        .justify-content-between { justify-content: space-between; }
        .d-flex { display: flex; }

        .preloader {
            position: fixed;
            top: 0; left: 0;
            width: 100%; height: 100%;
            background: #fff;
            z-index: 99999;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: opacity 0.4s ease;
        }
        .preloader .spinner {
            width: 44px; height: 44px;
            border: 4px solid #e9eef5;
            border-top: 4px solid #2c7be5;
            border-radius: 50%;
            animation: spin 0.9s linear infinite;
        }
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .header-area {
            background: rgba(255,255,255,0.92);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            box-shadow: 0 2px 20px rgba(0,0,0,0.04);
            padding: 14px 0;
            position: sticky;
            top: 0;
            z-index: 999;
            width: 100%;
        }
        #logo a {
            display: block;
            width: 134px;
            height: 42px;
            background: url('../assets/images/logo/logo.png') no-repeat left center / contain;
            transition: opacity 0.2s;
        }
        #logo a:hover { opacity: 0.8; }

        .nav-menu {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: flex-end;
            gap: 6px 28px;
            margin: 0;
        }
        .nav-menu li a {
            font-size: 15px;
            font-weight: 500;
            color: #2c3e50;
            letter-spacing: 0.2px;
            position: relative;
            padding-bottom: 6px;
            white-space: nowrap;
        }
        .nav-menu li a::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 0;
            height: 2px;
            background: #2c7be5;
            border-radius: 2px;
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

        .banner-area {
            background: linear-gradient(145deg, #f4f9ff 0%, #eaf2fc 60%, #e2edfb 100%);
            padding: 100px 0 110px;
            position: relative;
            overflow: hidden;
        }
        .banner-area::before {
            content: '';
            position: absolute;
            top: -120px;
            right: -80px;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(44,123,229,0.10) 0%, transparent 70%);
            border-radius: 50%;
            pointer-events: none;
        }
        .banner-area::after {
            content: '';
            position: absolute;
            bottom: -100px;
            left: -60px;
            width: 450px;
            height: 450px;
            background: radial-gradient(circle, rgba(44,123,229,0.06) 0%, transparent 70%);
            border-radius: 50%;
            pointer-events: none;
        }
        .banner-content {
            position: relative;
            z-index: 2;
        }
        .banner-area h4 {
            font-size: 14px;
            font-weight: 600;
            color: #2c7be5;
            letter-spacing: 3px;
            text-transform: uppercase;
            margin-bottom: 20px;
            display: inline-block;
            background: rgba(44,123,229,0.08);
            padding: 6px 16px;
            border-radius: 40px;
            backdrop-filter: blur(4px);
        }
        .banner-area h1 {
            font-size: 48px;
            font-weight: 700;
            line-height: 1.18;
            color: #0d1b2a;
            margin-bottom: 28px;
            letter-spacing: -0.5px;
        }
        .banner-area p {
            font-size: 17px;
            line-height: 1.9;
            color: #3a4a5a;
            max-width: 620px;
            margin-bottom: 0;
        }

        .banner-illustration {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            min-height: 260px;
            position: relative;
            z-index: 2;
        }
        .banner-illustration .pulse-ring {
            width: 220px;
            height: 220px;
            border-radius: 50%;
            background: linear-gradient(135deg, rgba(44,123,229,0.12), rgba(44,123,229,0.04));
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }
        .banner-illustration .pulse-ring::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            border: 2px solid rgba(44,123,229,0.15);
            animation: pulse 2.4s ease-out infinite;
        }
        .banner-illustration .pulse-ring::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            border: 2px solid rgba(44,123,229,0.10);
            animation: pulse 2.4s ease-out infinite 0.8s;
        }
        @keyframes pulse {
            0% { transform: scale(1); opacity: 0.8; }
            100% { transform: scale(1.5); opacity: 0; }
        }
        .banner-illustration .core-icon {
            width: 100px;
            height: 100px;
            background: #fff;
            border-radius: 50%;
            box-shadow: 0 12px 40px rgba(44,123,229,0.18);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            z-index: 3;
        }
        .banner-illustration .core-icon svg {
            width: 48px;
            height: 48px;
            fill: #2c7be5;
        }

        @media (min-width: 768px) {
            .banner-area {
                padding: 120px 0 140px;
            }
            .banner-area h1 {
                font-size: 52px;
            }
        }
        @media (min-width: 992px) {
            .banner-area {
                padding: 150px 0 160px;
            }
            .banner-area h1 {
                font-size: 54px;
            }
        }
        @media (max-width: 991px) {
            .banner-illustration {
                margin-top: 40px;
                min-height: 200px;
            }
            .banner-area {
                padding: 80px 0 90px;
            }
            .banner-area h1 {
                font-size: 38px;
            }
        }
        @media (max-width: 767px) {
            .header-area {
                padding: 12px 0;
            }
            .row.align-items-center {
                flex-wrap: wrap;
                justify-content: space-between;
            }
            .nav-menu {
                justify-content: center;
                margin-top: 10px;
                width: 100%;
                gap: 4px 20px;
            }
            .nav-menu li a {
                font-size: 14px;
                padding-bottom: 4px;
            }
            .banner-area {
                padding: 60px 0 70px;
            }
            .banner-area h1 {
                font-size: 32px;
                margin-bottom: 20px;
            }
            .banner-area h4 {
                font-size: 12px;
                letter-spacing: 2px;
                padding: 5px 14px;
                margin-bottom: 16px;
            }
            .banner-area p {
                font-size: 15px;
                line-height: 1.8;
            }
            .banner-illustration .pulse-ring {
                width: 170px;
                height: 170px;
            }
            .banner-illustration .core-icon {
                width: 80px;
                height: 80px;
            }
            .banner-illustration .core-icon svg {
                width: 38px;
                height: 38px;
            }
        }
        @media (max-width: 480px) {
            .container {
                padding: 0 18px;
            }
            .banner-area h1 {
                font-size: 28px;
            }
            .nav-menu li a {
                font-size: 13px;
            }
            .banner-illustration .pulse-ring {
                width: 140px;
                height: 140px;
            }
            .banner-illustration .core-icon {
                width: 70px;
                height: 70px;
            }
            .banner-illustration .core-icon svg {
                width: 32px;
                height: 32px;
            }
        }
        @media (hover: none) and (pointer: coarse) {
            .nav-menu li a {
                padding: 8px 2px;
            }
            .nav-menu li a::after {
                bottom: 2px;
            }
        }
    </style>
</head>
<body>
    <div class="preloader" id="preloader">
        <div class="spinner"></div>
    </div>

    <header class="header-area">
        <div id="header">
            <div class="container">
                <div class="row align-items-center justify-content-between d-flex">
                    <div id="logo">
                        <a href="/home" aria-label="Hospital Management System home"></a>
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

    <section class="banner-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="banner-content">
                        <h4>Caring for better life</h4>
                        <h1>Leading the way in medical excellence</h1>
                        <p>HMS is awarded as one of the Top Hospital Management System, which can integrate all the HIS systems, processes and machines into an intelligent information system to derive operational efficiency and assist hospitals in decision making process through MIS and Analytics.</p>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="banner-illustration">
                        <div class="pulse-ring">
                            <div class="core-icon">
                                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="assets/js/vendor/bootstrap-4.1.3.min.js"></script>
    <script src="assets/js/vendor/wow.min.js"></script>
    <script src="assets/js/vendor/owl-carousel.min.js"></script>
    <script src="assets/js/vendor/jquery.datetimepicker.full.min.js"></script>
    <script src="assets/js/vendor/jquery.nice-select.min.js"></script>
    <script src="assets/js/vendor/superfish.min.js"></script>
    <script>
        (function ($) {
            'use strict';

            $(window).on('load', function () {
                $('#preloader').fadeOut(400, function () {
                    $(this).remove();
                });
            });

            setTimeout(function () {
                $('#preloader').fadeOut(400, function () {
                    $(this).remove();
                });
            }, 1500);

            if (typeof WOW !== 'undefined') {
                new WOW().init();
            }
        })(jQuery);
    </script>
</body>
</html>