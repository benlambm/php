<?php
session_start();
$pid = htmlspecialchars($_GET['pid']);
$_SESSION['cart'][$pid] = 0;
header('Location: cart.php?pid=0');
