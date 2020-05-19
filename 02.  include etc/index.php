<?php
// Example 1
// include_once "functions.php";
// require_once "functions.php";

// echo $num1;

// $res = Sum(4, 8);

// echo "Result = " . $res;

// $arr = [2, 3, 324, 234, 324, 23, 5345, 4, 654, 7, 585, 6, 3, 4, 435, 345, 43543, 534, 534, 5, 43];

// for ($i = 0; $i < sizeof($arr); $i++) {
//     echo $arr[$i] . " ";
// }

// print_r($_SERVER);
// echo $_SERVER['SERVER_SOFTWARE'];

// foreach ($_SERVER as $key => $value) {
//     echo "<div> Key =" . $key . " Value = " . $value . "</div>";
// }


#example 2

$email = "";
$pass = "";

if (!empty($_POST)) {
    $email = $_POST['email'];
    $pass = $_POST['password'];
    if (isset($_POST['check'])) {
        $check = $_POST['check'];
        echo $check;
    }
}




// echo "Email = " . $email;
// echo "Password = " . $pass;

require_once "views/header.html";
require_once "views/main.html";
require_once "views/footer.html";

// print_r($_GET);
