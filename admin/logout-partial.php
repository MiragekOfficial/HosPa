<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include '../config.php';

    unset($_SESSION['ad_id']);
    session_destroy();

    header("Location: logout");
    exit;
?>