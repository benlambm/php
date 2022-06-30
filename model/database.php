<?php
$data_source_name = 'mysql:host=localhost;dbname=benlamb';

try {
    $db = new PDO($data_source_name, 'mfw8fk2fqzsi', 'ABC123abc!@#');
} catch (PDOException $e) {
    exit("An error occurred when trying to connect to the database.");
}
