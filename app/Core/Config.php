<?php
namespace App\Core;

use Dotenv\Dotenv;

class Config {
    private static $env;

    public static function load() {
        if (!self::$env) {
            $dotenv = Dotenv::createImmutable(__DIR__ . '/../../');
            $dotenv->load();
            self::$env = $_ENV;
        }
    }

    public static function get($key ) {
        self::load();
        return self::$env[$key];
    }
}
