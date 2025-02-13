<?php
class Database {
    private static $host = "localhost";
    private static $dbname = "amarfuel_BGD";
    private static $username = "amarfuel_SHAH";
    private static $password = "QR+O?B?QOU-.F^^B!S";
    private static $conn = null;
    
    
 
    

    public static function connect() {
        if (self::$conn === null) {
            try {
                self::$conn = new PDO("mysql:host=" . self::$host . ";dbname=" . self::$dbname, self::$username, self::$password);
                self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Database connection failed: " . $e->getMessage());
            }
        }
        return self::$conn;
    }
}
?>
