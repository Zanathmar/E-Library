<?php
class Database
{
    private $host = 'localhost';
    private $dbname = 'e_library';
    private $user = 'root';
    private $password = '';

    private static $conn;

    public static function connect()
    {

        if (self::$conn = null) {
            try {
                self::$conn = new PDO("mysql:host=localhost;dbname=e_library", "root", "");
                self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                //  echo "connection established";
            } catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
            }

            return self::$conn;
        }
    }
}
