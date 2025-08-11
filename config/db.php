<?php

class Database
{
    public static function connect()
    {
        $host = 'db';
        $dbname = 'idk_ambiente_web';
        $username = 'usuario';
        $password = 'clave';

        try {
            $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }
}
