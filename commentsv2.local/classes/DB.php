<?php
class DB{
    private static $db;

    private function __construct(){}
    private function __clone(){}

    public static function getConnection() {
        if (self::$db === null){
            self::$db = new mysqli('localhost', 'root','','comments');
        }
        return self::$db;
    }

}