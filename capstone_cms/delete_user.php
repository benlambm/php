<?php

$uid = htmlspecialchars($_GET['uid']);

require_once('../model/database.php');
try {
    $query = "DELETE FROM Users WHERE UserID=".$uid;
    $statement = $db->prepare($query);
    $statement->execute();
    $statement->closeCursor();
    header("Location: ./user_manager.php");
} catch (Exception $exception) {
    print($exception . "\n");
    exit($query . " did not work");
}

