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
    <div class="hospa__app-wrapper">

        <!-- ========== Sidebar ========== -->
        <?php include 'assets/inc/sidebar.php'; ?>

        <!-- ========== Main Content ========== -->
        <div class="hospa__main">

            <!-- ========== Top Navigation ========== -->
            <?php include 'assets/inc/nav.php'; ?>

            <!-- ========== Page Content ========== -->
            <div class="hospa__page">
                <div class="hospa__page-header">
                    <h2 class="hospa__page-title">
                        Hospital Management Information System Dashboard
                        <small>overview &amp; activity</small>
                    </h2>
                    <div class="hospa__action-btn">
                        <i class="fas fa-plus-circle"></i> Create New
                    </div>
                </div>

                <!-- Stat Cards -->
                <div class="hospa__card-grid">
                    <!-- Patients Card -->
                    <div class="hospa__stat-card">
                        <div class="hospa__stat-label">Patients</div>
                        <div class="hospa__stat-number">
                            <?php
                            $result = 'SELECT count(*) FROM his_patients';
                            $stmt = $mysqli->prepare($result);
                            $stmt->execute();
                            $stmt->bind_result($patient);
                            $stmt->fetch();
                            $stmt->close();
                            echo $patient;
                            ?>
                        </div>
                    </div>

                    <!-- Assets Card -->
                    <div class="hospa__stat-card">
                        <div class="hospa__stat-label">Corporation Assets</div>
                        <div class="hospa__stat-number">
                            <?php
                            $result = 'SELECT count(*) FROM his_equipments';
                            $stmt = $mysqli->prepare($result);
                            $stmt->execute();
                            $stmt->bind_result($assets);
                            $stmt->fetch();
                            $stmt->close();
                            echo $assets;
                            ?>
                        </div>
                    </div>

                    <!-- Pharmaceuticals Card -->
                    <div class="hospa__stat-card">
                        <div class="hospa__stat-label">Pharmaceuticals</div>
                        <div class="hospa__stat-number">
                            <?php
                            $result = 'SELECT count(*) FROM his_pharmaceuticals';
                            $stmt = $mysqli->prepare($result);
                            $stmt->execute();
                            $stmt->bind_result($phar);
                            $stmt->fetch();
                            $stmt->close();
                            echo $phar;
                            ?>
                        </div>
                    </div>
                </div>

                <!-- Quick Links Row -->
                <div class="row" style="margin-bottom:30px;">
                    <div class="col-md-6">
                        <a href="account" style="text-decoration:none;">
                            <div class="hospa__stat-card" style="cursor:pointer;">
                                <div style="display:flex; align-items:center; gap:20px;">
                                    <div style="width:50px; height:50px; border-radius:50%; background:#fee; display:flex; align-items:center; justify-content:center;">
                                        <i class="fas fa-user-tag" style="font-size:22px; color:#dc3545;"></i>
                                    </div>
                                    <div>
                                        <h5 style="margin:0; color:#13202e;">My Profile</h5>
                                        <p style="margin:0; color:#6e859e; font-size:0.85rem;">View and update your account</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="view-payrolls" style="text-decoration:none;">
                            <div class="hospa__stat-card" style="cursor:pointer;">
                                <div style="display:flex; align-items:center; gap:20px;">
                                    <div style="width:50px; height:50px; border-radius:50%; background:#fee; display:flex; align-items:center; justify-content:center;">
                                        <i class="mdi mdi-cash-refund" style="font-size:22px; color:#dc3545;"></i>
                                    </div>
                                    <div>
                                        <h5 style="margin:0; color:#13202e;">My Payroll</h5>
                                        <p style="margin:0; color:#6e859e; font-size:0.85rem;">View your payroll history</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Patients Table -->
                <div style="background:white; border-radius:22px; padding:24px; box-shadow:0 8px 20px rgba(0,20,40,0.04); border:1px solid rgba(0,0,0,0.02);">
                    <h4 class="header-title mb-3">Patients</h4>
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
                                $ret = "SELECT * FROM his_patients ORDER BY RAND() LIMIT 100";
                                $stmt = $mysqli->prepare($ret);
                                $stmt->execute();
                                $res = $stmt->get_result();
                                while($row = $res->fetch_object()) {
                                ?>
                                <tr>
                                    <td><?php echo $row->pat_fname; ?> <?php echo $row->pat_lname; ?></td>
                                    <td><?php echo $row->pat_addr; ?></td>
                                    <td><?php echo $row->pat_phone; ?></td>
                                    <td><?php echo $row->pat_type; ?></td>
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

            <!-- ========== Footer ========== -->
            <?php include 'assets/inc/footer.php'; ?>

        </div>
        <!-- End Main Content -->

    </div>
    <!-- End App Wrapper -->

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