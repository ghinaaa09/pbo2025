<?php

namespace App\Database;

use PDO;
use PDOException;

class DbConnector
{
    private static ?PDO $instance = null;

    private const DB_HOST = 'localhost';
    private const DB_NAME = 'pbo2025';
    private const DB_USER = 'root';
    private const DB_PASS = '';

    public static function connect(): PDO
    {
        if (self::$instance === null) {
            $dsn = 'mysql:host=' . self::DB_HOST . ';dbname=' . self::DB_NAME . ';charset=utf8mb4';
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ];

            try {
                self::$instance = new PDO($dsn, self::DB_USER, self::DB_PASS, $options);
            } catch (PDOException $e) {
                die("Koneksi Gagal: " . $e->getMessage());
            }
        }
        return self::$instance;
    }
}
