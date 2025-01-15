<?php
require_once '../models/User.php';
class AuthController
{
    private $userModel;
    public function __construct()
    {
        $this->userModel = new User();
    }

    public function register($name, $phone, $password, $address)
    {
        if (empty($name) || empty($phone) || empty($password) || empty($address)) {
            return "Please fill in all fields.";
        }
        if ($this->userModel->getUserByPhone($phone)) {
            return "Phone number already exists.";
        }
        
        $user = $this->userModel->register($name, $phone, $password, $address);
        if ($user) {
            $loggedUser = $this->userModel->getUserByPhone($phone);
            session_start();
            $_SESSION['user_id'] = $loggedUser;
            header('Location: ../views/dashboard.php');
            exit();
        } else {
            return "User registration failed";
        }
    }
}
