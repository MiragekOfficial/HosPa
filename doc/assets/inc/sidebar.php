<!-- Sidebar - Hardened with hospa_ classes -->
<?php
// Get current page name from URL
$current_page = basename($_SERVER['PHP_SELF'], '.php');
$full_url = $_SERVER['REQUEST_URI'];
$path_parts = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
$current_page_path = end($path_parts);

// Helper function to check if link is active
function is_active($page, $current) {
    return ($page == $current) ? 'active' : '';
}

// Helper function for sub-menu active
function has_active_sub($pages, $current_page) {
    foreach ($pages as $page) {
        if (strpos($current_page, $page) !== false) {
            return true;
        }
    }
    return false;
}
?>
<aside class="hospa__sidebar" id="hospa__sidebar">
    <div class="hospa__sidebar-brand">
        <i class="fas fa-heartbeat"></i>
        <span>HMIS · Med</span>
        <button class="hospa__sidebar-close" id="hospa__sidebarClose">
            <i class="fe-x"></i>
        </button>
    </div>
    <div class="hospa__sidebar-menu">
        <div class="hospa__menu-title">Navigation</div>

        <!-- Dashboard -->
        <a href="dashboard" class="hospa__nav-item <?php echo ($current_page == 'dashboard' || $current_page_path == 'dashboard') ? 'active' : ''; ?>">
            <i class="fe-airplay"></i> <span>Dashboard</span>
        </a>

        <!-- Patients -->
        <?php 
        $patients_pages = ['register-patient', 'view-patients', 'manage-patient', 'discharge-patient', 'patient-transfer', 'view-single-patient'];
        $patients_active = has_active_sub($patients_pages, $current_page);
        ?>
        <div class="hospa__nav-item hospa__has-children <?php echo $patients_active ? 'open' : ''; ?>" onclick="toggleSubMenu(this)">
            <span><i class="fab fa-accessible-icon"></i> Patients</span>
            <span class="hospa__arrow"><i class="fas fa-chevron-down"></i></span>
        </div>
        <ul class="hospa__sub-menu <?php echo $patients_active ? 'open' : ''; ?>">
            <li><a href="register-patient" class="<?php echo ($current_page == 'register-patient') ? 'active' : ''; ?>">Register Patient</a></li>
            <li><a href="view-patients" class="<?php echo ($current_page == 'view-patients') ? 'active' : ''; ?>">View Patients</a></li>
            <li><a href="manage-patient" class="<?php echo ($current_page == 'manage-patient') ? 'active' : ''; ?>">Manage Patients</a></li>
            <hr class="hospa__sub-divider">
            <li><a href="discharge-patient" class="<?php echo ($current_page == 'discharge-patient') ? 'active' : ''; ?>">Discharge Patients</a></li>
            <li><a href="patient-transfer" class="<?php echo ($current_page == 'patient-transfer') ? 'active' : ''; ?>">Patient Transfers</a></li>
        </ul>

        <!-- Pharmacy -->
        <?php 
        $pharmacy_pages = ['add-pharm-cat', 'view-pharm-cat', 'manage-pharm-cat', 'add-pharmaceuticals', 'view-pharmaceuticals', 'manage-pharmaceuticals', 'add-presc', 'view-presc', 'manage-presc'];
        $pharmacy_active = has_active_sub($pharmacy_pages, $current_page);
        ?>
        <div class="hospa__nav-item hospa__has-children <?php echo $pharmacy_active ? 'open' : ''; ?>" onclick="toggleSubMenu(this)">
            <span><i class="mdi mdi-pill"></i> Pharmacy</span>
            <span class="hospa__arrow"><i class="fas fa-chevron-down"></i></span>
        </div>
        <ul class="hospa__sub-menu <?php echo $pharmacy_active ? 'open' : ''; ?>">
            <li><a href="add-pharm-cat" class="<?php echo ($current_page == 'add-pharm-cat') ? 'active' : ''; ?>">Add Pharm Category</a></li>
            <li><a href="view-pharm-cat" class="<?php echo ($current_page == 'view-pharm-cat') ? 'active' : ''; ?>">View Pharm Category</a></li>
            <li><a href="manage-pharm-cat" class="<?php echo ($current_page == 'manage-pharm-cat') ? 'active' : ''; ?>">Manage Pharm Category</a></li>
            <hr class="hospa__sub-divider">
            <li><a href="add-pharmaceuticals" class="<?php echo ($current_page == 'add-pharmaceuticals') ? 'active' : ''; ?>">Add Pharmaceuticals</a></li>
            <li><a href="view-pharmaceuticals" class="<?php echo ($current_page == 'view-pharmaceuticals') ? 'active' : ''; ?>">View Pharmaceuticals</a></li>
            <li><a href="manage-pharmaceuticals" class="<?php echo ($current_page == 'manage-pharmaceuticals') ? 'active' : ''; ?>">Manage Pharmaceuticals</a></li>
            <hr class="hospa__sub-divider">
            <li><a href="add-presc" class="<?php echo ($current_page == 'add-presc') ? 'active' : ''; ?>">Add Prescriptions</a></li>
            <li><a href="view-presc" class="<?php echo ($current_page == 'view-presc') ? 'active' : ''; ?>">View Prescriptions</a></li>
            <li><a href="manage-presc" class="<?php echo ($current_page == 'manage-presc') ? 'active' : ''; ?>">Manage Prescriptions</a></li>
        </ul>

        <!-- Inventory -->
        <?php 
        $inventory_pages = ['pharm-inventory', 'equipments-inventory'];
        $inventory_active = has_active_sub($inventory_pages, $current_page);
        ?>
        <div class="hospa__nav-item hospa__has-children <?php echo $inventory_active ? 'open' : ''; ?>" onclick="toggleSubMenu(this)">
            <span><i class="fas fa-funnel-dollar"></i> Inventory</span>
            <span class="hospa__arrow"><i class="fas fa-chevron-down"></i></span>
        </div>
        <ul class="hospa__sub-menu <?php echo $inventory_active ? 'open' : ''; ?>">
            <li><a href="pharm-inventory" class="<?php echo ($current_page == 'pharm-inventory') ? 'active' : ''; ?>">Pharmaceuticals</a></li>
            <li><a href="equipments-inventory" class="<?php echo ($current_page == 'equipments-inventory') ? 'active' : ''; ?>">Assets</a></li>
        </ul>

        <!-- Laboratory -->
        <?php 
        $lab_pages = ['patient-lab-test', 'patient-lab-result', 'patient-lab-vitals', 'lab-report'];
        $lab_active = has_active_sub($lab_pages, $current_page);
        ?>
        <div class="hospa__nav-item hospa__has-children <?php echo $lab_active ? 'open' : ''; ?>" onclick="toggleSubMenu(this)">
            <span><i class="mdi mdi-flask"></i> Laboratory</span>
            <span class="hospa__arrow"><i class="fas fa-chevron-down"></i></span>
        </div>
        <ul class="hospa__sub-menu <?php echo $lab_active ? 'open' : ''; ?>">
            <li><a href="patient-lab-test" class="<?php echo ($current_page == 'patient-lab-test') ? 'active' : ''; ?>">Patient Lab Tests</a></li>
            <li><a href="patient-lab-result" class="<?php echo ($current_page == 'patient-lab-result') ? 'active' : ''; ?>">Patient Lab Results</a></li>
            <li><a href="patient-lab-vitals" class="<?php echo ($current_page == 'patient-lab-vitals') ? 'active' : ''; ?>">Patient Vitals</a></li>
            <li><a href="lab-report" class="<?php echo ($current_page == 'lab-report') ? 'active' : ''; ?>">Lab Reports</a></li>
        </ul>

        <!-- Payrolls -->
        <?php 
        $payroll_pages = ['view-payrolls'];
        $payroll_active = has_active_sub($payroll_pages, $current_page);
        ?>
        <div class="hospa__nav-item hospa__has-children <?php echo $payroll_active ? 'open' : ''; ?>" onclick="toggleSubMenu(this)">
            <span><i class="mdi mdi-cash-refund"></i> Payrolls</span>
            <span class="hospa__arrow"><i class="fas fa-chevron-down"></i></span>
        </div>
        <ul class="hospa__sub-menu <?php echo $payroll_active ? 'open' : ''; ?>">
            <li><a href="view-payrolls" class="<?php echo ($current_page == 'view-payrolls') ? 'active' : ''; ?>">My Payrolls</a></li>
        </ul>
    </div>
</aside>

<!-- Sidebar Overlay -->
<div class="hospa__sidebar-overlay" id="hospa__sidebarOverlay"></div>

<script>
// Toggle submenu
function toggleSubMenu(element) {
    element.classList.toggle('open');
    const subMenu = element.nextElementSibling;
    if (subMenu && subMenu.classList.contains('hospa__sub-menu')) {
        subMenu.classList.toggle('open');
    }
}

// Mobile menu toggle
document.addEventListener('DOMContentLoaded', function() {
    const sidebar = document.getElementById('hospa__sidebar');
    const overlay = document.getElementById('hospa__sidebarOverlay');
    const menuToggle = document.getElementById('hospa__menuToggle');
    const sidebarClose = document.getElementById('hospa__sidebarClose');

    function openSidebar() {
        sidebar.classList.add('open');
        overlay.classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    function closeSidebar() {
        sidebar.classList.remove('open');
        overlay.classList.remove('active');
        document.body.style.overflow = '';
    }

    if (menuToggle) {
        menuToggle.addEventListener('click', openSidebar);
    }

    if (sidebarClose) {
        sidebarClose.addEventListener('click', closeSidebar);
    }

    if (overlay) {
        overlay.addEventListener('click', closeSidebar);
    }

    // Close on escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && sidebar.classList.contains('open')) {
            closeSidebar();
        }
    });

    // Close on window resize (if going from mobile to desktop)
    window.addEventListener('resize', function() {
        if (window.innerWidth > 992 && sidebar.classList.contains('open')) {
            closeSidebar();
        }
    });
});
</script>