<?php
session_start();
require_once '../helper/auth_helper.php';
requireAuth();

$user = $_SESSION['user'];
?>

<h1>Dashboard</h1>
<h2>Welcome, <?= $user['name']; ?></h2>