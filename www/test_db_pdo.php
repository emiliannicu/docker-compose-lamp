<?php

$DBuser = $_ENV['MYSQL_USER'];
$DBpass = $_ENV['MYSQL_PASSWORD'];
$pdo = null;

try{
    $database = 'mysql:host=mysql_database:3306';
    $pdo = new PDO($database, $DBuser, $DBpass);
    echo "Success: A proper connection to MySQL was made! The docker database is great.";    
} catch(PDOException $e) {
    echo "Error: Unable to connect to MySQL. Error:\n $e";
}

$pdo = null;