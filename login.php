<?php
session_start();
$username_valid = "unnes";
$password_valid = "123456";

if (!isset($_SESSION["login"])) {
    $_SESSION["login"] = [];
}

$username = isset($_POST["username"]) ? $_POST["username"] : '';
if (($username == $username_valid) && ($password == $password_valid)) {

    $_SESSION["login"][] = [
        "username"=> $username,
        "password"=> $password,
        "time"=> date("Y-m-d H:i:s")
    ];

    echo "Login Berhasil : " . $username . ", anda sudah login sebanyak:" . count($_SESSION["login"]) . " kali";
    
    echo '<br>';

    echo '<a href="logout.php">Logout</a>';

    echo '<pre>';
    var_dump ($_SESSION["login"]);    
} else {
    echo "Login Gagal";
}
    echo "Login Gagal";
