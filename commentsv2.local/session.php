<?php

if (isset($_COOKIE['session_id'])){
    session_id('session_id');
    session_start();
} else {
    session_start();
}