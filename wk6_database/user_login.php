<?php
session_start();
$_SESSION['logged_in'] = false;
$username = $_POST['username'];
$_SESSION['username'] = $username;
$password = $_POST['password'];
$_SESSION['password'] = $username;

if ($username === 'customer' && $password === 'customer') {
    $_SESSION['logged_in'] = true;
    header('Location: ./chart.php');
} else {
    header('Location: ./login_error.php');
}
?>
