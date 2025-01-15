<?php
session_start();
require_once '../helper/auth_helper.php';
requireGuest();

$errorMessage = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once '../controllers/AuthController.php';
    $authController = new AuthController();
    $errorMessage = $authController->register($_POST['name'], $_POST['phone'], $_POST['password'], $_POST['address']);
}

?>

<h1>Register</h1>
<form method="POST">
    <?php if (!empty($errorMessage)) {
    ?>
        <p><?= $errorMessage ?></p>
    <?php
    }
    ?>
    <label for="name">Name</label>
    <input type="text" name="name" placeholder="Name">
    <label for="phone">Phone</label>
    <input type="text" name="phone" placeholder="Phone">
    <label for="password">Password</label>
    <input type="password" name="password" placeholder="Password">
    <label for="address">Address</label>
    <input type="text" name="address" placeholder="Address">
    <button type="submit">Register</button>
</form>