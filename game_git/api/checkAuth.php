<?php
include_once './db.php';
session_start();
if($_SERVER['REQUEST_METHOD'] == 'GET' && array_key_exists('token', $_SESSION)){
    $token = $_SESSION['token'];
    $db->query("
        UPDATE users SET api_token=NULL
        WHERE api_token='$token'
        ")->fetchAll();
    // Удаляет токен из session
    unset($_SESSION['token']);
    //header("Location: logoutUser.php");
}
?>