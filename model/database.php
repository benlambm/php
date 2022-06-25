<?php
$data_source_name = 'mysql:host=localhost;dbname=benlamb';

try {
    $db = new PDO($data_source_name, 'root', 'root');
} catch (PDOException $e) {
    exit("An error occurred when trying to connect to the database.");
}
