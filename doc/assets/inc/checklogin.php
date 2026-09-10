<?php
// doc/assets/inc/checklogin.php

function check_login()
{
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    if (empty($_SESSION['doc_id'])) {
        header('Location: index');
        exit();
    }
}