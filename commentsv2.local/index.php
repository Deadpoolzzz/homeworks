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
        $smarty->display('login.tpl');
        if (isset($_SESSION['name'])){
            header('location: index.php?action=profile');
        } else {

            if (isset($_POST['email']) && isset($_POST['pass'])) {
                if (empty($_POST['email']) || empty($_POST['pass'])) {
                    die("<span style='margin-left: 44%; color: white' class='label label-danger'> Please enter correct data</span>");
                }
                $email = $_POST['email'];
                $pass = $_POST['pass'];
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    die("<span style='margin-left: 44%; color: white' class='label label-danger'> Please enter a valid email</span>");
                }
                if (User::userLogin($email, $pass)){
                    $_SESSION['name'] = $email;
                    header('location: index.php?action=profile');
                }
                die("<span style='margin-left: 42%; color: white' class='label label-danger'>Invalid email or password. Try again!</span>");
            }
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
                $new_pass = password_hash($pass, PASSWORD_DEFAULT);
                $user = new User();
                $user->userRegister($email, $new_pass);
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
        $smarty->display('profile.tpl');
        break;
    case 'logout':
        User::userLogout();
        break;
    default:
        die('action does not exists');
}
