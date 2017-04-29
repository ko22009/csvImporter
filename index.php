<?php

if (!isset($_SESSION)) {
    session_start();
}

$_SESSION['user_id'] = $_SERVER['HTTP_USER_ID']; // допустим, мы 2 пользователь

require_once __DIR__ . '/vendor/autoload.php';
ini_set('include_path', './app');

if ($_SERVER['REQUEST_URI'] == '/') require_once 'page.php';
else {
	$path = __DIR__ . '/app' . $_SERVER['REQUEST_URI'];
    if(file_exists($path))
    require_once $path;
    else {
        header("HTTP/1.0 404 Not Found");
        echo 'This page was not found';
    }
}