<?php
// doc/dashboard.php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include '../config.php';
include 'assets/inc/checklogin.php';
check_login();
$doc_id = $_SESSION['doc_id'];
$doc_number = $_SESSION['doc_number'];

?>
<!DOCTYPE html>
<html lang="en">

<!-- Head Code -->
<?php include 'assets/inc/head.php'; ?>

<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Topbar Start -->
        <?php include 'assets/inc/nav.php'; ?>
        <!-- end Topbar -->

        <!-- ========== Left Sidebar Start ========== -->
        <?php include 'assets/inc/sidebar.php'; ?>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <h4 class="page-title">Hospital Management Information System Dashboard</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <!-- Stats Cards Row -->
                    <div class="row">
                        <!-- Patients Card -->
                        <div class="col-md-6 col-xl-3">
                            <div class="widget-rounded-circle card-box">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <div class="avatar-lg rounded-circle bg-soft-primary border-primary border">
                                            <i class="fas fa-users font-22 avatar-title text-primary"></i>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="text-right">
                                            <?php
                                            $result = 'SELECT count(*) FROM his_patients';
                                            $stmt = $mysqli->prepare($result);
                                            $stmt->execute();
                                            $stmt->bind_result($patient);
                                            $stmt->fetch();
                                            $stmt->close();
                                            ?>
                                            <h3 class="text-dark mt-1"><span data-plugin="counterup"><?php echo $patient; ?></span></h3>
                                            <p class="text-muted mb-1 text-truncate">Total Patients</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Assets Card -->
                        <div class="col-md-6 col-xl-3">
                            <div class="widget-rounded-circle card-box">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <div class="avatar-lg rounded-circle bg-soft-success border-success border">
                                            <i class="fas fa-server font-22 avatar-title text-success"></i>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="text-right">
                                            <?php
                                            $result = 'SELECT count(*) FROM his_equipments';
                                            $stmt = $mysqli->prepare($result);
                                            $stmt->execute();
                                            $stmt->bind_result($assets);
                                            $stmt->fetch();
                                            $stmt->close();
                                            ?>
                                            <h3 class="text-dark mt-1"><span data-plugin="counterup"><?php echo $assets; ?></span></h3>
                                            <p class="text-muted mb-1 text-truncate">Total Assets</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pharmaceuticals Card -->
                        <div class="col-md-6 col-xl-3">
                            <div class="widget-rounded-circle card-box">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <div class="avatar-lg rounded-circle bg-soft-warning border-warning border">
                                            <i class="fas fa-pills font-22 avatar-title text-warning"></i>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="text-right">
                                            <?php
                                            $result = 'SELECT count(*) FROM his_pharmaceuticals';
                                            $stmt = $mysqli->prepare($result);
                                            $stmt->execute();
                                            $stmt->bind_result($phar);
                                            $stmt->fetch();
                                            $stmt->close();
                                            ?>
                                            <h3 class="text-dark mt-1"><span data-plugin="counterup"><?php echo $phar; ?></span></h3>
                                            <p class="text-muted mb-1 text-truncate">Pharmaceuticals</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Doctors Card -->
                        <div class="col-md-6 col-xl-3">
                            <div class="widget-rounded-circle card-box">
                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <div class="avatar-lg rounded-circle bg-soft-danger border-danger border">
                                            <i class="fas fa-user-md font-22 avatar-title text-danger"></i>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="text-right">
                                            <?php
                                            $result = 'SELECT count(*) FROM his_docs';
                                            $stmt = $mysqli->prepare($result);
                                            $stmt->execute();
                                            $stmt->bind_result($doctors);
                                            $stmt->fetch();
                                            $stmt->close();
                                            ?>
                                            <h3 class="text-dark mt-1"><span data-plugin="counterup"><?php echo $doctors; ?></span></h3>
                                            <p class="text-muted mb-1 text-truncate">Total Doctors</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Stats Cards Row -->

                    <!-- Quick Action Cards Row -->
                    <div class="row">
                        <!-- My Profile -->
                        <div class="col-md-6 col-xl-3">
                            <a href="account" style="text-decoration:none;">
                                <div class="widget-rounded-circle card-box" style="cursor:pointer; transition:all 0.2s;">
                                    <div class="row align-items-center">
                                        <div class="col-6">
                                            <div class="avatar-lg rounded-circle bg-soft-info border-info border">
                                                <i class="fas fa-user-tag font-22 avatar-title text-info"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-right">
                                                <h3 class="text-dark mt-1"><i class="fas fa-chevron-right text-muted"></i></h3>
                                                <p class="text-muted mb-1 text-truncate">My Profile</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- My Payroll -->
                        <div class="col-md-6 col-xl-3">
                            <a href="view-payrolls" style="text-decoration:none;">
                                <div class="widget-rounded-circle card-box" style="cursor:pointer; transition:all 0.2s;">
                                    <div class="row align-items-center">
                                        <div class="col-6">
                                            <div class="avatar-lg rounded-circle bg-soft-danger border-danger border">
                                                <i class="mdi mdi-cash-multiple font-22 avatar-title text-danger"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-right">
                                                <h3 class="text-dark mt-1"><i class="fas fa-chevron-right text-muted"></i></h3>
                                                <p class="text-muted mb-1 text-truncate">My Payroll</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Register Patient -->
                        <div class="col-md-6 col-xl-3">
                            <a href="register-patient" style="text-decoration:none;">
                                <div class="widget-rounded-circle card-box" style="cursor:pointer; transition:all 0.2s;">
                                    <div class="row align-items-center">
                                        <div class="col-6">
                                            <div class="avatar-lg rounded-circle bg-soft-success border-success border">
                                                <i class="fas fa-user-plus font-22 avatar-title text-success"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-right">
                                                <h3 class="text-dark mt-1"><i class="fas fa-chevron-right text-muted"></i></h3>
                                                <p class="text-muted mb-1 text-truncate">Register Patient</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Lab Report -->
                        <div class="col-md-6 col-xl-3">
                            <a href="lab-report" style="text-decoration:none;">
                                <div class="widget-rounded-circle card-box" style="cursor:pointer; transition:all 0.2s;">
                                    <div class="row align-items-center">
                                        <div class="col-6">
                                            <div class="avatar-lg rounded-circle bg-soft-warning border-warning border">
                                                <i class="fas fa-flask font-22 avatar-title text-warning"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-right">
                                                <h3 class="text-dark mt-1"><i class="fas fa-chevron-right text-muted"></i></h3>
                                                <p class="text-muted mb-1 text-truncate">Lab Report</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- End Quick Action Cards Row -->

                    <!-- Patients Table -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card-box">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <h4 class="header-title mb-0">Recent Patients</h4>
                                    <a href="view-patients" class="btn btn-sm btn-primary">View All</a>
                                </div>

                                <div class="table-responsive">
                                    <table class="table table-borderless table-hover table-centered m-0">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>Name</th>
                                                <th>Address</th>
                                                <th>Mobile Phone</th>
                                                <th>Category</th>
                                                <th>Ailment</th>
                                                <th>Age</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $ret = "SELECT * FROM his_patients ORDER BY RAND() LIMIT 50";
                                            $stmt = $mysqli->prepare($ret);
                                            $stmt->execute();
                                            $res = $stmt->get_result();
                                            while($row = $res->fetch_object()) {
                                            ?>
                                            <tr>
                                                <td>
                                                    <strong><?php echo $row->pat_fname; ?> <?php echo $row->pat_lname; ?></strong>
                                                </td>
                                                <td><?php echo $row->pat_addr; ?></td>
                                                <td><?php echo $row->pat_phone; ?></td>
                                                <td>
                                                    <span class="badge badge-<?php echo ($row->pat_type == 'InPatient') ? 'danger' : 'info'; ?>">
                                                        <?php echo $row->pat_type; ?>
                                                    </span>
                                                </td>
                                                <td><?php echo $row->pat_ailment; ?></td>
                                                <td><?php echo $row->pat_age; ?> Years</td>
                                                <td>
                                                    <a href="view-single-patient?pat_id=<?php echo $row->pat_id; ?>&pat_number=<?php echo $row->pat_number; ?>&pat_name=<?php echo $row->pat_fname; ?>_<?php echo $row->pat_lname; ?>"
                                                        class="btn btn-xs btn-success">
                                                        <i class="mdi mdi-eye"></i> View
                                                    </a>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Patients Table Row -->

                </div> <!-- container -->

            </div> <!-- content -->

            <!-- Footer Start -->
            <?php include 'assets/inc/footer.php'; ?>
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <!-- Right Sidebar -->
    <div class="right-bar">
        <div class="rightbar-title">
            <a href="javascript:void(0);" class="right-bar-toggle float-right">
                <i class="dripicons-cross noti-icon"></i>
            </a>
            <h5 class="m-0 text-white">Settings</h5>
        </div>
        <div class="slimscroll-menu">
            <!-- User box -->
            <div class="user-box">
                <div class="user-img">
                    <img src="../assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme"
                        class="rounded-circle img-fluid">
                    <a href="javascript:void(0);" class="user-edit"><i class="mdi mdi-pencil"></i></a>
                </div>

                <h5><a href="javascript: void(0);">Geneva Kennedy</a> </h5>
                <p class="text-muted mb-0"><small>Admin Head</small></p>
            </div>

            <!-- Settings -->
            <hr class="mt-0" />
            <h5 class="pl-3">Basic Settings</h5>
            <hr class="mb-0" />

            <div class="p-3">
                <div class="checkbox checkbox-primary mb-2">
                    <input id="Rcheckbox1" type="checkbox" checked>
                    <label for="Rcheckbox1">
                        Notifications
                    </label>
                </div>
                <div class="checkbox checkbox-primary mb-2">
                    <input id="Rcheckbox2" type="checkbox" checked>
                    <label for="Rcheckbox2">
                        API Access
                    </label>
                </div>
                <div class="checkbox checkbox-primary mb-2">
                    <input id="Rcheckbox3" type="checkbox">
                    <label for="Rcheckbox3">
                        Auto Updates
                    </label>
                </div>
                <div class="checkbox checkbox-primary mb-2">
                    <input id="Rcheckbox4" type="checkbox" checked>
                    <label for="Rcheckbox4">
                        Online Status
                    </label>
                </div>
                <div class="checkbox checkbox-primary mb-0">
                    <input id="Rcheckbox5" type="checkbox" checked>
                    <label for="Rcheckbox5">
                        Auto Payout
                    </label>
                </div>
            </div>

            <!-- Timeline -->
            <hr class="mt-0" />
            <h5 class="px-3">Messages <span class="float-right badge badge-pill badge-danger">25</span></h5>
            <hr class="mb-0" />
            <div class="p-3">
                <div class="inbox-widget">
                    <div class="inbox-item">
                        <div class="inbox-item-img"><img src="../assets/images/users/user-2.jpg" class="rounded-circle"
                                alt=""></div>
                        <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Tomaslau</a>
                        </p>
                        <p class="inbox-item-text">I've finished it! See you so...</p>
                    </div>
                    <div class="inbox-item">
                        <div class="inbox-item-img"><img src="../assets/images/users/user-3.jpg" class="rounded-circle"
                                alt=""></div>
                        <p class="inbox-item-author"><a href="javascript: void(0);"
                                class="text-dark">Stillnotdavid</a></p>
                        <p class="inbox-item-text">This theme is awesome!</p>
                    </div>
                    <div class="inbox-item">
                        <div class="inbox-item-img"><img src="../assets/images/users/user-4.jpg" class="rounded-circle"
                                alt=""></div>
                        <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Kurafire</a>
                        </p>
                        <p class="inbox-item-text">Nice to meet you</p>
                    </div>

                    <div class="inbox-item">
                        <div class="inbox-item-img"><img src="../assets/images/users/user-5.jpg" class="rounded-circle"
                                alt=""></div>
                        <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Shahedk</a></p>
                        <p class="inbox-item-text">Hey! there I'm available...</p>
                    </div>
                    <div class="inbox-item">
                        <div class="inbox-item-img"><img src="../assets/images/users/user-6.jpg" class="rounded-circle"
                                alt=""></div>
                        <p class="inbox-item-author"><a href="javascript: void(0);"
                                class="text-dark">Adhamdannaway</a></p>
                        <p class="inbox-item-text">This theme is awesome!</p>
                    </div>
                </div> <!-- end inbox-widget -->
            </div> <!-- end .p-3-->

        </div> <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- Vendor js -->
    <script src="assets/js/vendor.min.js"></script>

    <!-- Plugins js-->
    <script src="assets/libs/flatpickr/flatpickr.min.js"></script>
    <script src="assets/libs/jquery-knob/jquery.knob.min.js"></script>
    <script src="assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="assets/libs/flot-charts/jquery.flot.js"></script>
    <script src="assets/libs/flot-charts/jquery.flot.time.js"></script>
    <script src="assets/libs/flot-charts/jquery.flot.tooltip.min.js"></script>
    <script src="assets/libs/flot-charts/jquery.flot.selection.js"></script>
    <script src="assets/libs/flot-charts/jquery.flot.crosshair.js"></script>

    <!-- Dashboard init js-->
    <script src="assets/js/pages/dashboard-1.init.js"></script>

    <!-- App js-->
    <script src="assets/js/app.min.js"></script>

</body>
</html>