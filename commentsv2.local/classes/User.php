<?php
class User
{
    private $email;
    private $pass;
    private $is_admin;
    private $id;

    public function setId($id){
        $this->id = $id;
    }
    public function setEmail($email) {
        $this->email = $email;
    }

    public function setPass($pass) {
        $this->pass = $pass;
    }

    public function setAdmin($is_admin) {
        $this->is_admin = $is_admin;
    }

    public function getUserEmail()
    {
        return $this->email;
    }
    public function getUserId(){
        return $this->id;
    }

    /**
     * @param $email
     * @param $originalPass
     * @return bool
     */
    public static function userRegister($email, $originalPass)
    {
        $pass = password_hash($originalPass, PASSWORD_DEFAULT);
        $conn = DB::getConnection();
        $conn->query("INSERT INTO `users`(`username`, `password`, `is_admin`) VALUES ('$email', '$pass', 0)");
        $user = self::userLogin($email, $originalPass);
        return ($user instanceof User);
    }

    /**
     * Method search user in DB
     * @param $email
     * @return array|bool
     */
    public static function findUser($email)
    {
        $db = DB::getConnection();
        $query = ('SELECT * FROM `users` WHERE `username` = "'.$email.'" LIMIT 1');
        $res = $db->query($query);
        if ($db->affected_rows === 0){
            return false;
        }
        return $res->fetch_assoc();

    }

    /**
     * @param $email
     * @param $pass
     * @return bool|User
     */
    public static function userLogin($email, $pass)
    {
        $foundUser = User::findUser($email);

        if (!$foundUser || !password_verify($pass, $foundUser["password"])) {

            return false;
        }

        $user = new self();
        $user->setEmail($email);
        $user->setAdmin($foundUser["is_admin"]);
        $user->setId($foundUser["id"]);
        Session::set("user",$user);

        return $user;
    }

    /**
     *
     */
    public function userLogout() {
        Session::stop();
    }

    /**
     * @return array|mixed
     */
    public static function getUsersArticle()
    {
        $db = DB::getConnection();
        $query = 'SELECT users.username, article, date_created FROM articles LEFT JOIN users ON articles.user_id=users.id';
        $res = $db->query($query);
        if($db->affected_rows === 0) {
            return [];
        }
        return $res->fetch_all(MYSQLI_ASSOC);
    }
}