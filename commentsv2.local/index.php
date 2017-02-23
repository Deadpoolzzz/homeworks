<?php

require_once 'libs/Smarty.class.php';
require_once 'classes/DB.php';
require_once 'classes/Session.php';
require_once 'classes/User.php';

$smarty = new Smarty();
$smarty->setTemplateDir('views');
$action = !empty($_REQUEST['action']) ? $_REQUEST['action'] : "login";
Session::start();

switch ($action){
    case 'login':
        if (Session::get("user")) {
            header('location: index.php?action=profile');
        }

        if (isset($_POST['email']) && isset($_POST['pass'])) {
            $email = $_POST['email'];
            $pass = $_POST['pass'];
            $smarty->assign('email', $email);

            if (User::userLogin($email, $pass)) {
                header('location: index.php?action=profile');
            } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $smarty->assign('error', 'Please enter a valid email');
            } else {
                $smarty->assign('error', 'Invalid email or password. Try again!');
            }
        }
        $data = User::getUsersArticle();
        $smarty->assign('array', $data);
        $smarty->display('login.tpl');

        break;
    case 'register':

        if (Session::get("user")) {
            header('location: index.php?action=profile');
            return;
        }
        if (isset($_POST['email']) && isset($_POST['pass'])) {
            $email = htmlentities(trim($_POST['email']));
            $pass = $_POST['pass'];
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $smarty->assign('error', "Enter valid email!");
            } else if (strlen($pass) < 6 ){
                $smarty->assign('error', "Password must be more than 5 characters");
            } else if (User::findUser($email)) {
                $smarty->assign('error', "User already exists!");
            } else if (!User::userRegister($email, $pass)) {
                header('location: index.php');
            } else {
                header('location: index.php?action=profile');
            }
        }
        $smarty->display('register.tpl');
        break;
    case 'profile':
        $error = "";
        if (isset($_POST['addComment'])){
            $comment = $_POST['addComment'];
            if (empty($comment)){
                $smarty->assign('error',"Could not be empty");
                }
                echo $comment; //TODO CREAT COMMENT CLASS
            }

            $data = User::getUsersArticle();
            $smarty->assign('array', $data);
            $smarty->display('profile.tpl');
        break;
    case 'logout':

        /** @var User $user */
        if($user = Session::get("user")) {
            $user->userLogout();
        }
        header("Location: index.php");
        break;
    default:
        die('action does not exists');
}
