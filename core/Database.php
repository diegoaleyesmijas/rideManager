<?php
class Database {
    private static $connection = null;

    public static function connect() {
        if (self::$connection === null) {
            self::$connection = new mysqli('localhost', 'root', 'Thiago2015', 'ridemanager');
            if (self::$connection->connect_error) {
                die('Error de conexión: ' . self::$connection->connect_error);
            }
            self::$connection->set_charset('utf8');
        }
        return self::$connection;
    }
}