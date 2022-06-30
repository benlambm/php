<?php

$first = htmlspecialchars($_POST['first_name']);
$last = htmlspecialchars($_POST['last_name']);
$username = htmlspecialchars($_POST['username']);
$pswd = htmlspecialchars($_POST['pswd']);

require_once('../model/database.php');
try {
    $query = "INSERT INTO Users VALUES(NULL, :first, :last, :username, :pswd, NULL)";
    $statement = $db->prepare($query);
    $statement->bindValue(':first', $first);
    $statement->bindValue(':last', $last);
    $statement->bindValue(':username', $username);
    $statement->bindValue(':pswd', $pswd);
    $statement->execute();
    $statement->closeCursor();
    header("Location: ./user_manager.php");
} catch (Exception $exception) {
    print($exception . "\n");
    exit($query . " did not work");
}
