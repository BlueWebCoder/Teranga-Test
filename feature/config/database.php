<?php

/**
 * database.php
 * 
 * Classe de gestion de la connexion à la base de données via PDO.
 * 
 * PHP version 8.0+
 * 
 * @category   EHPAD
 * @package    TerangaSoftware
 * @subpackage Config
 * @author     Julien Salmon
 * @copyright  2024 Julien Salmon
 * @version    1.0.0
 * @link       https://www.teranga-software.com/
 * @since      2024-10-27
 */

 
class Database {

    private static $host = 'db';
    private static $db_name = 'teranga';
    private static $username = 'teranga_user';
    private static $password = 'teranga_password';
    private static $conn;

    // Database connexion
    public static function getConnection() {
        self::$conn = null;

        try {
            self::$conn = new PDO("mysql:host=" . self::$host . ";dbname=" . self::$db_name, self::$username, self::$password);
            self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) {
            echo "Erreur de connexion à la base de données: " . $exception->getMessage();
        }

        return self::$conn;
    }
}

 