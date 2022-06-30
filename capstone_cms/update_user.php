<?php
$uid = htmlspecialchars($_POST['uid']);
$first = htmlspecialchars($_POST['first_name']);
$last = htmlspecialchars($_POST['last_name']);
$username = htmlspecialchars($_POST['username']);
$pswd = htmlspecialchars($_POST['pswd']);

require_once('../model/database.php');
try {

    $query = "UPDATE Users SET FirstName=:first, LastName=:last, Username=:username, Password=:pswd WHERE UserID = :uid";
    $statement = $db->prepare($query);
    $statement->bindValue(':uid', $uid);
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
