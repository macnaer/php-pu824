<?php
session_start();
require_once "dbconfig.php";
$db = new DB();
$message = "";
if (!empty($_POST)) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    if ($password ==  $confirm_password) {
        if ($db->CheckEmail($email)) {
            $db->Register($email, crypt($password, "My password"));
            $message = "Successful";
        } else {
            $message = "This email is already used";
        }
    } else
        $message = "Password doesn't match";
}
require_once "views/header.html";
require_once "views/footer.html";
if ($message == "Successful")
    require_once "views/login.html";
else
    require_once "views/main.html";
