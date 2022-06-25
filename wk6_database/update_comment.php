<?php
$id = htmlspecialchars($_POST['id']);
$name = htmlspecialchars($_POST['name']);
$title = htmlspecialchars($_POST['title']);
$comments = htmlspecialchars($_POST['comments']);
//$timestamp = $_POST['ts'];

//TODO Data Validation

require_once('../model/database.php');
try {
    //The following bindValue syntax is what I was taught to use at Virginia Western Community College
    $query = "UPDATE Comment SET Name=:name, Title=:title, Comments=:comments WHERE CommentID = :id";
    $statement = $db->prepare($query);
    $statement->bindValue(':id', $id);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':title', $title);
    $statement->bindValue(':comments', $comments);
    $statement->execute();
    $statement->closeCursor();
    header("Location: ./chart.php");
} catch (Exception $exception) {
    print($exception . "\n");
    exit($query . " did not work");
}