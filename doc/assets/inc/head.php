<head>
    <meta charset="utf-8" />
    <title>Hospital Management Information System - Super Responsive</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme for hospital management" name="description" />
    <meta content="MartDevelopers" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Plugins css -->
    <link href="assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

    <!-- Loading button css -->
    <link href="assets/libs/ladda/ladda-themeless.min.css" rel="stylesheet" type="text/css" />

    <!-- Footable css -->
    <link href="assets/libs/footable/footable.core.min.css" rel="stylesheet" type="text/css" />

    <!-- Load Sweet Alert Javascript -->
    <script src="assets/js/swal.js"></script>

    <!-- Hardened layout styles - prevents conflicts -->
    <style>
        /* ---------- RESET & GLOBAL OVERRIDES ---------- */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: #f4f7fc;
            font-family: 'Inter', system-ui, -apple-system, 'Segoe UI', Roboto, sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* ---------- LAYOUT WRAPPER ---------- */
        .hospa__app-wrapper {
            display: flex;
            flex: 1;
            width: 100%;
            max-width: 100vw;
            overflow-x: hidden;
            min-height: 100vh;
        }

        /* ---------- SIDEBAR ---------- */
        .hospa__sidebar {
            width: 260px;
            background: #1a2639;
            color: #e9edf4;
            display: flex;
            flex-direction: column;
            flex-shrink: 0;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            overflow-y: auto;
            transition: transform 0.3s ease;
            box-shadow: 2px 0 12px rgba(0, 0, 0, 0.08);
            z-index: 1000;
            transform: translateX(0);
        }

        /* Sidebar overlay for mobile */
        .hospa__sidebar-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            z-index: 999;
            transition: opacity 0.3s ease;
        }

        .hospa__sidebar-overlay.active {
            display: block;
        }

        .hospa__sidebar-brand {
            padding: 24px 20px 16px;
            font-size: 1.2rem;
            font-weight: 600;
            letter-spacing: 0.3px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.06);
            display: flex;
            align-items: center;
            gap: 10px;
            color: #fff;
            flex-shrink: 0;
        }

        .hospa__sidebar-brand i {
            font-size: 1.6rem;
            color: #6c8cff;
        }

        .hospa__sidebar-close {
            display: none;
            background: transparent;
            border: none;
            color: #fff;
            font-size: 1.5rem;
            cursor: pointer;
            margin-left: auto;
            padding: 0 8px;
        }

        .hospa__sidebar-menu {
            padding: 16px 12px 30px;
            flex: 1;
            overflow-y: auto;
        }

        .hospa__menu-title {
            font-size: 0.65rem;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            color: #8b9bb5;
            padding: 12px 8px 6px;
            opacity: 0.7;
        }

        .hospa__nav-item {
            display: block;
            border-radius: 10px;
            padding: 8px 12px;
            margin: 2px 0;
            color: #cdd9ed;
            font-weight: 450;
            transition: 0.15s;
            text-decoration: none;
            font-size: 0.9rem;
            cursor: pointer;
        }

        .hospa__nav-item i {
            width: 24px;
            text-align: center;
            margin-right: 10px;
            font-size: 1rem;
            color: #7a8aa8;
        }

        .hospa__nav-item:hover,
        .hospa__nav-item.active {
            background: rgba(108, 140, 255, 0.12);
            color: #ffffff;
        }

        .hospa__nav-item.active {
            background: rgba(108, 140, 255, 0.15);
            color: #ffffff;
            border-left: 3px solid #6c8cff;
        }

        .hospa__nav-item.active i {
            color: #6c8cff;
        }

        .hospa__nav-item.hospa__has-children {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .hospa__nav-item.hospa__has-children .hospa__arrow {
            font-size: 0.7rem;
            opacity: 0.6;
            transition: transform 0.3s ease;
        }

        .hospa__nav-item.hospa__has-children.open {
            background: rgba(108, 140, 255, 0.08);
        }

        .hospa__nav-item.hospa__has-children.open i {
            color: #6c8cff;
        }

        .hospa__nav-item.hospa__has-children.open .hospa__arrow {
            transform: rotate(180deg);
        }

        .hospa__sub-menu {
            padding-left: 18px;
            margin: 4px 0 8px;
            list-style: none;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease, opacity 0.3s ease;
            opacity: 0;
        }

        .hospa__sub-menu.open {
            max-height: 500px;
            opacity: 1;
        }

        .hospa__sub-menu li {
            margin: 2px 0;
        }

        .hospa__sub-menu a {
            display: block;
            padding: 6px 12px 6px 28px;
            font-size: 0.85rem;
            color: #b7c6dd;
            text-decoration: none;
            border-radius: 8px;
            transition: all 0.2s ease;
        }

        .hospa__sub-menu a:hover {
            background: rgba(255, 255, 255, 0.05);
            color: white;
            padding-left: 25px;
        }

        .hospa__sub-menu a.active {
            background: rgba(108, 140, 255, 0.12);
            color: #ffffff;
            border-left: 3px solid #6c8cff;
            padding-left: 25px;
        }

        .hospa__sub-menu a.active i {
            color: #6c8cff;
        }

        .hospa__sub-divider {
            border: none;
            border-top: 1px solid rgba(255, 255, 255, 0.06);
            margin: 12px 0;
        }

        /* ---------- MAIN CONTENT ---------- */
        .hospa__main {
            flex: 1;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background: #f2f6fe;
            margin-left: 260px;
            transition: margin-left 0.3s ease;
            width: 100%;
        }

        /* ---------- TOP NAV - STICKY ---------- */
        .hospa__topnav {
            background: white;
            padding: 8px 30px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            border-bottom: 1px solid rgba(0, 0, 0, 0.04);
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.02);
            position: sticky;
            top: 0;
            z-index: 50;
            min-height: 64px;
        }

        .hospa__topnav-left {
            display: flex;
            align-items: center;
            gap: 18px;
        }

        .hospa__topnav-hamburger {
            background: transparent;
            border: none;
            font-size: 1.3rem;
            color: #334e68;
            cursor: pointer;
            padding: 8px 10px;
            border-radius: 8px;
            transition: background 0.2s;
            display: none;
        }

        .hospa__topnav-hamburger:hover {
            background: rgba(0, 0, 0, 0.05);
        }

        .hospa__topnav-brand {
            font-weight: 600;
            color: #1a2b3c;
            letter-spacing: -0.2px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .hospa__topnav-brand small {
            font-weight: 400;
            color: #6b7f94;
            font-size: 0.7rem;
            margin-left: 6px;
        }

        .hospa__topnav-search {
            background: #f0f4fb;
            border-radius: 40px;
            padding: 4px 12px 4px 18px;
            display: flex;
            align-items: center;
            border: 1px solid transparent;
            transition: 0.2s;
        }

        .hospa__topnav-search:focus-within {
            background: white;
            border-color: #6c8cff;
            box-shadow: 0 0 0 3px rgba(108, 140, 255, 0.2);
        }

        .hospa__topnav-search input {
            border: none;
            background: transparent;
            padding: 8px 6px;
            font-size: 0.85rem;
            width: 180px;
            outline: none;
            color: #1e2f40;
        }

        .hospa__topnav-search button {
            background: transparent;
            border: none;
            color: #5d738b;
            font-size: 0.9rem;
            cursor: pointer;
        }

        .hospa__topnav-right {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .hospa__user-profile {
            display: flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
        }

        .hospa__user-avatar {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: #d9e2ef;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #1a2b3c;
            font-weight: 600;
            font-size: 0.9rem;
            overflow: hidden;
            flex-shrink: 0;
        }

        .hospa__user-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .hospa__user-name {
            font-weight: 500;
            color: #1e2f40;
            font-size: 0.9rem;
        }

        .hospa__user-name i {
            font-size: 0.6rem;
            margin-left: 6px;
            color: #7a8aa8;
        }

        .hospa__header-action {
            background: transparent;
            border: none;
            color: #3a506b;
            font-size: 1.1rem;
            cursor: pointer;
            padding: 6px 8px;
            border-radius: 8px;
            transition: background 0.2s;
            position: relative;
        }

        .hospa__header-action:hover {
            background: rgba(0, 0, 0, 0.05);
        }

        .hospa__header-action .hospa__badge {
            position: absolute;
            top: 0;
            right: 0;
            background: #dc3545;
            color: white;
            font-size: 0.6rem;
            padding: 2px 6px;
            border-radius: 50%;
            min-width: 18px;
            text-align: center;
        }

        /* ---------- PAGE CONTENT ---------- */
        .hospa__page {
            padding: 28px 32px 20px;
            flex: 1;
        }

        .hospa__page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 28px;
            flex-wrap: wrap;
            gap: 16px;
        }

        .hospa__page-title {
            font-size: 1.6rem;
            font-weight: 600;
            color: #13202e;
            letter-spacing: -0.3px;
            margin: 0;
        }

        .hospa__page-title small {
            font-size: 0.9rem;
            font-weight: 400;
            color: #5d738b;
            margin-left: 12px;
        }

        .hospa__action-btn {
            background: #1a2b3c;
            color: white;
            border: none;
            padding: 10px 22px;
            border-radius: 40px;
            font-weight: 500;
            font-size: 0.9rem;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: 0.15s;
            cursor: pointer;
            text-decoration: none;
        }

        .hospa__action-btn i {
            font-size: 1rem;
        }

        .hospa__action-btn:hover {
            background: #2c4057;
            color: white;
            text-decoration: none;
        }

        /* ---------- CARDS ---------- */
        .hospa__card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 24px;
            margin: 30px 0 20px;
        }

        .hospa__stat-card {
            background: white;
            border-radius: 22px;
            padding: 22px 18px;
            box-shadow: 0 8px 20px rgba(0, 20, 40, 0.04);
            border: 1px solid rgba(0, 0, 0, 0.02);
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .hospa__stat-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 28px rgba(0, 20, 40, 0.08);
        }

        .hospa__stat-card .hospa__stat-label {
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 0.4px;
            color: #6e859e;
        }

        .hospa__stat-card .hospa__stat-number {
            font-size: 2.1rem;
            font-weight: 600;
            color: #13202e;
            margin-top: 6px;
        }

        /* ---------- FOOTER ---------- */
        .hospa__footer {
            background: white;
            border-top: 1px solid rgba(0, 0, 0, 0.04);
            padding: 18px 32px;
            font-size: 0.85rem;
            color: #3e5a72;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: auto;
            box-shadow: 0 -2px 8px rgba(0, 0, 0, 0.02);
        }

        .hospa__footer a {
            color: #3e5a72;
            text-decoration: none;
            font-weight: 500;
            border-bottom: 1px dotted transparent;
        }

        .hospa__footer a:hover {
            border-bottom-color: #6c8cff;
        }

        .hospa__footer .hospa__footer-copy {
            opacity: 0.75;
        }

        /* ---------- RESPONSIVE ---------- */
        @media (max-width: 992px) {
            .hospa__sidebar {
                transform: translateX(-100%);
            }

            .hospa__sidebar.open {
                transform: translateX(0);
            }

            .hospa__sidebar-close {
                display: block;
            }

            .hospa__main {
                margin-left: 0;
            }

            .hospa__topnav-hamburger {
                display: block;
            }
        }

        @media (max-width: 576px) {
            .hospa__topnav {
                padding: 8px 16px;
            }

            .hospa__topnav-search input {
                width: 120px;
            }

            .hospa__page {
                padding: 20px 16px;
            }

            .hospa__footer {
                flex-direction: column;
                text-align: center;
                padding: 18px 16px;
            }

            .hospa__page-title {
                font-size: 1.3rem;
            }

            .hospa__page-title small {
                display: block;
                margin-left: 0;
                margin-top: 4px;
            }

            .hospa__user-name {
                display: none;
            }

            .hospa__card-grid {
                grid-template-columns: 1fr 1fr;
                gap: 12px;
            }
        }

        @media (max-width: 400px) {
            .hospa__card-grid {
                grid-template-columns: 1fr;
            }
        }

        /* Scrollbar styling */
        .hospa__sidebar::-webkit-scrollbar {
            width: 4px;
        }

        .hospa__sidebar::-webkit-scrollbar-track {
            background: transparent;
        }

        .hospa__sidebar::-webkit-scrollbar-thumb {
            background: #3a4a62;
            border-radius: 10px;
        }

        .hospa__sidebar::-webkit-scrollbar-thumb:hover {
            background: #4a5a72;
        }
    </style>

    <!-- Inject SWAL -->
    <?php if(isset($success)) {?>
    <script>
        setTimeout(function() {
            swal("Success", "<?php echo $success; ?>", "success");
        }, 100);
    </script>
    <?php } ?>

    <?php if(isset($err)) {?>
    <script>
        setTimeout(function() {
            swal("Failed", "<?php echo $err; ?>", "Failed");
        }, 100);
    </script>
    <?php } ?>
</head>
