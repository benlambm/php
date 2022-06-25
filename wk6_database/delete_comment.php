<?php
require_once('../model/database.php');

try {
    $db->query("DELETE FROM Comment WHERE CommentID=".htmlspecialchars($_GET['id']));
} catch (PDOException $exception){
    print($exception);
}

header("Location: ./chart.php");