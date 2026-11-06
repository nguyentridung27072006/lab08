<?php
session_start();

$correct_user = "Dung";
$correct_pass = "03518";

$username = $_POST['username'];
$password = $_POST['password'];

if ($username === $correct_user && $password === $correct_pass) {

    $_SESSION['user'] = $username;

    header("Location: welcome.php");
    exit();

} else {

    header("Location: login.php?error=1");
    exit();

}
?>