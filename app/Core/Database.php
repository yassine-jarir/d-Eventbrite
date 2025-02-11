<?php
namespace App\Core;
use Dotenv\Dotenv;
use App\Core\Config;

class Database
{
    private static $pdo;

    public static function connection()
    {
        if (!self::$pdo) {
            $serverHost = $_ENV['DB_HOST'];
            $userName = $_ENV['DB_USERNAME'];
            $password = $_ENV['DB_PASSWORD'];
            $dbName = $_ENV['DB_NAME'];

            $dsn = "pgsql:host=$serverHost;dbname=$dbName";
            self::$pdo = new \PDO($dsn, $userName, $password);
        }
        return self::$pdo;
    }
}


 