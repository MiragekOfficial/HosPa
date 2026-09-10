<?php
// admin\assets\inc\checklogin.php

function check_login()
{
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    if (empty($_SESSION['ad_id'])) {
        header('Location: index');
        exit();
    }
}
?>
