<?php
session_start();


require_once "dbconfig.php";

$db = new DB();
$message = "";
if (!empty($_POST)) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!$db->CheckEmail($email)) {
        $login = $db->Login($email);

        if (hash_equals($login["HashPassword"],  crypt($password, "My password"))) {
            $message = "Sign in is successful";
            $_SESSION["username"] = $login['Email'];
            $_SESSION["logged"] = true;
        }
    } else {
        $message = "User not found";
    }

    // if (file_exists($fileName)) {
    //     $handle = fopen($fileName, "r");
    //     $contents = fread($handle, filesize($fileName));
    //     fclose($handle);

    //     if (hash_equals($contents,  crypt($password, "My password")))
    //         $message = "Sign in is successful";
    // } else {
    //     $message = "Error";
    // }
}
require_once "views/header.html";
require_once "views/footer.html";
require_once "views/login.html";
