<head>
    <meta charset="utf-8" />
    <title>Hospital Management Information System - Super Responsive</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme for hospital management" name="description" />
    <meta content="MartDevelopers" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="../assets/images/favicon.ico">

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

    <link href="assets/css/app-new.css" rel="stylesheet" type="text/css" />

    <script src="assets/js/app-new.js"></script>


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
            swal("Failed", "<?php echo $err; ?>", "error");
        }, 100);
    </script>
    <?php } ?>
</head>
