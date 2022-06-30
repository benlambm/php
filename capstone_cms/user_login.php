<?php
session_start();
$_SESSION['logged_in'] = false;
$_SESSION['user_type'] = null;

require_once('../model/database.php');

$username = htmlspecialchars($_POST['username']);
$_SESSION['username'] = $username;

try {
    $query = "SELECT Password FROM Users WHERE Username='$username';";
    $stmt = $db->query($query);
    $user_credentials = $stmt->fetch();
    $pswd = $user_credentials[0];
} catch (Exception $exception) {
    header('Location: ./login_error.php');
}

if ($_POST['password']=== $pswd) {
    $_SESSION['logged_in'] = true;
    $_SESSION['user_type'] = $username;
    header('Location: ./index.php');
} else {
    header('Location: ./login_error.php');
}
?>

