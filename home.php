<?php
// home.php

$dir = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/');

// If dirname is empty or ".", we're at the domain root
if ($dir === '' || $dir === '.' || $dir === '\\') {
    $dir = '';
}

header('Location: ' . $dir . '/', true, 302);
exit;