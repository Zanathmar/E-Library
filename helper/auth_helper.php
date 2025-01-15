<?php

function requireAuth() {
    if (!isset($_SESSION['user'])) {
       header('Location: login.php');
       exit();
    }
}
function requireGuest() {
    if (isset($_SESSION['user'])) {
       header('Location: dashboard.php');
       exit();
    }
}
?>