<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include '../config.php';

    unset($_SESSION['doc_id']);
    unset($_SESSION['doc_number']);
    session_destroy();

    header("Location: his_doc_logout.php");
    exit;
?>