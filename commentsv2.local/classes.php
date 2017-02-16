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

class User{
    private $email;
    private $pass;
    public function setEmail($email) {
        $this->email = $email;
    }

    public function setPass($pass) {
        $this->pass = $pass;
    }
    public function userRegister($email, $new_pass){
        $conn = DB::getConnection();
        $conn->query("INSERT INTO `users`(`username`, `password`, `is_admin`) VALUES ('$email', '$new_pass', 0)");
        $conn->affected_rows;
        if ($conn->affected_rows === 1){
            return true;
        }
        return false;

    }
    public static function userLogin($email, $pass){
        $conn = DB::getConnection();
        $conn->query('SELECT * FROM `users` WHERE `username` = "'.$email.'" AND `password` = "'.$pass.'" LIMIT 1');
        $conn->affected_rows;
        if ($conn->affected_rows == 1){
            return true;
        }
        return false;
    }
    public static function userLogout() {
        unset($_SESSION);
        session_destroy();
        header('Location: index.php');
    }
}
