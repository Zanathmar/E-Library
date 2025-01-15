<?php
session_start();
require_once '../helper/auth_helper.php';
requireGuest();

$errorMessage = "Error";

?>

<h1>Login</h1>
<form action="POST">
    <?php if (!empty($errorMessage)) {
      ?>
      <p><?= $errorMessage ?></p>
      <?php
    }
    ?>
    <label for="username">Username</label>
    <input type="text" name="username" placeholder="Username">
    <label for="password">Password</label>
    <input type="password" name="password" placeholder="Password">
    <button type="submit">Login</button>
</form>
<a href="register.php">Register</a>