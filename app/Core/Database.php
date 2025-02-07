<?php
class Database
{
    private  static  $serverHost = "localhost";
    private static  $userHost = "postgres";
    private  static $password = "";
    private  static $db = "deventbrite";
    private  static $pdo;

    public static function connection()
    {
        if (self::$pdo) {
            return self::$pdo;
        } else {
            $dsn = "pgsql:host=" . self::$serverHost . ";dbname=" . self::$db;
            self::$pdo = new PDO($dsn, self::$userHost, self::$password);
            return self::$pdo;
        }
    }
}
// $connect=Database::connection();