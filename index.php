<?php

if (!isset($_SESSION)) {
    session_start();
}

$_SESSION['user_id'] = $_SERVER['HTTP_USER_ID']; // допустим, мы 2 пользователь

ini_set('include_path', './app');

if ($_SERVER['REQUEST_URI'] == '/') require_once 'page.php';
else {
    if(file_exists(__DIR__ . '/app' . $_SERVER['REQUEST_URI']))
    require_once $_SERVER['REQUEST_URI'];
    else {
        header("HTTP/1.0 404 Not Found");
        echo 'This page was not found';
    }
}