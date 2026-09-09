// doc\assets\js\app-new.js
// Toggle submenu
function toggleSubMenu(element) {
    element.classList.toggle('open');
    const subMenu = element.nextElementSibling;
    if (subMenu && subMenu.classList.contains('hospa__sub-menu')) {
        subMenu.classList.toggle('open');
    }
}

// Mobile menu toggle - works with all pages
document.addEventListener('DOMContentLoaded', function () {
    const sidebar = document.getElementById('hospa__sidebar');
    const overlay = document.getElementById('hospa__sidebarOverlay');

    // Find hamburger menu - could be in nav.php
    let menuToggle = document.getElementById('hospa__menuToggle');

    // If not found, create one in the topnav
    if (!menuToggle) {
        const topnavLeft = document.querySelector('.hospa__topnav-left');
        if (topnavLeft) {
            const hamburger = document.createElement('button');
            hamburger.className = 'hospa__topnav-hamburger';
            hamburger.id = 'hospa__menuToggle';
            hamburger.setAttribute('aria-label', 'Toggle navigation');
            hamburger.innerHTML = '<i class="fe-menu"></i>';
            topnavLeft.insertBefore(hamburger, topnavLeft.firstChild);
            menuToggle = hamburger;
        }
    }

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
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && sidebar.classList.contains('open')) {
            closeSidebar();
        }
    });

    // Close on window resize
    window.addEventListener('resize', function () {
        if (window.innerWidth > 992 && sidebar.classList.contains('open')) {
            closeSidebar();
        }
    });
});