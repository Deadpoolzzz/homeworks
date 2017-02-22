<?php
require_once 'session.php';
require_once 'libs/Smarty.class.php';
require_once 'classes.php';
$smarty = new Smarty();
$smarty->setTemplateDir('views');
$db = DB::getConnection();
$action = !empty($_REQUEST['action']) ? $_REQUEST['action'] : "login";

switch ($action){
    case 'login':
        if (isset($_SESSION['name'])){
            header('location: index.php?action=profile');
        } else {

            if (isset($_POST['email']) && isset($_POST['pass'])) {
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                $smarty->assign('email', $email);

                if (User::userLogin($email, $pass)){
                    $_SESSION['name'] = $email;
                    header('location: index.php?action=profile&&username=' . $_SESSION['name']);
                } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    $error = "<span style='margin-left: 42%; color: white' class='label label-danger'> Please enter a valid email</span>";
                } else {
                    $error = "<span style='margin-left: 40%; color: white' class='label label-danger'>Invalid email or password. Try again!</span>";
                }
                $smarty->assign('error', $error);
            }
            $query = 'SELECT users.username, article, date_created FROM articles LEFT JOIN users ON articles.user_id=users.id';
            $res = $db->query($query);
            $data = $res->fetch_all(MYSQLI_ASSOC);
            $smarty->assign('array', $data);
            $smarty->display('login.tpl');

        }
        break;
    case 'register':
        $smarty->display('register.tpl');
        if (isset($_SESSION['name'])){
            header('location: index.php?action=profile');
        } else {
            if (isset($_POST['email']) && isset($_POST['pass'])) {
                if (empty($_POST['email']) || empty($_POST['pass'])) {
                    die("<span style='margin-left: 44%; color: white' class='label label-danger'> Please enter correct data</span>" );
                }
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    die("<span style='margin-left: 44%; color: white' class='label label-danger'> Please enter a valid email</span>");
                }
                if (strlen($pass) < 6 ){
                    die("<span style='margin-left: 41%; color: white' class='label label-danger'>Password must be more than 5 characters</span>");
                }
                $query = ('SELECT * FROM `users` WHERE `username` = "'.$email.'" LIMIT 1');
                $res = $db->query($query);
                $userData = $res->fetch_all(MYSQLI_ASSOC);
                $email = htmlentities(trim($_POST['email']));

                foreach ($userData as $data){
                    if($data['username'] === $email) {
                        die("<span style='margin-left: 45%; color: white' class='label label-danger'>User already exists!</span>");

                    }
                }
                $user = new User();
                $user->userRegister($email, $pass);
                $user->setEmail($email);
                $user->setPass($pass);
                $_SESSION['user'] = $user;
                $userArray = (array)$user;
                $keys = array_keys($userArray);
                $_SESSION['name'] = $userArray[$keys[0]];
                header('location: index.php?action=profile');
            }
        }
        break;
    case 'profile':
        if (isset($_POST['addComment']) && !empty($_POST['addComment'])){
           $comment = htmlentities(trim($_POST['addComment']));
           echo $comment;
        } else {
            $error = "<span style='margin-left: 45%; color: white' class='label label-danger'>Cannot be empty!</span>";
        }
            $query = 'SELECT users.username, article, date_created FROM articles LEFT JOIN users ON articles.user_id=users.id';
            $res = $db->query($query);
            $data = $res->fetch_all(MYSQLI_ASSOC);
            $smarty->assign('array', $data);
            $smarty->display('profile.tpl');
        break;
    case 'logout':
        User::userLogout();
        break;
    default:
        die('action does not exists');
}
