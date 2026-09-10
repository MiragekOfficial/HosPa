<?php
// config.php

#######################
# 1. ESSENTIALS
#######################
ini_set('display_errors', 0);
ini_set('log_errors', 1);
error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT);
ini_set('error_log', __DIR__ . '/php_error.log');


#######################
# 2. PROJECT
#######################
$SITE_NAME_SHORT   =   "Hospa";
$SITE_NAME_LONG    =   "Hospa - Hospital Management Information System";
$SITE_BASE         =   "https://hospa-free.xyz";

$SITE_DEMO         =   false;


#######################
# DATABASE
#######################
$host        =    "localhost";
$dbuser      =    "root";
$dbpass      =    "";
$db          =    "hospa_db";



#######################
# DO NOT EDIT BELOW
#######################

$mysqli=new mysqli($host,$dbuser, $dbpass, $db);
