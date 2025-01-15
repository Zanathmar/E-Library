<?php

if (isset($_SESSION['user'])) {
    header('Location: views/dashboard.php');
    exit;
}

header('Location: views/login.php');
exit;
?>