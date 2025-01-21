<?php
require_once '../config/Database.php';
class User
{
    private $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    public function register($name, $phone, $password, $address)
    {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $this->db->prepare("INSERT INTO users (name, phone, password, address) VALUES (:name, :phone, :password, :address)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':password', $hashed_password);
        $stmt->bindParam(':address', $address);
        return $stmt->execute();
    }

    public function getUserByPhone($phone)
    {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE phone = :phone");
        $stmt->bindParam(':phone', $phone);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function login($phone, $password) {
        $user = $this->getUserByPhone($phone);

        if ($user && password_verify($password, $user['password'])) {
            if (password_verify($password, $user['password'])) {
                return $user;
            } else {
                return false;
            }
        }
    }
}
