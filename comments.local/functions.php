<?php

function logout(){
        unset($_SESSION['name']);
        unset($_SESSION['is_admin']);
        if (isset($_COOKIE['userID'])){
            unset($_COOKIE['userID']);
            setcookie("userID", "", time()-3600);
        }
    if(isset($_COOKIE['is_admin'])):
        setcookie('is_admin', '', time()-7000000, '/');
    endif;
        session_destroy();
        header('Location: main.php');
}
