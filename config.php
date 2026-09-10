<?php
// config.php

#######################
# 1. ESSENTIALS
#######################



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
