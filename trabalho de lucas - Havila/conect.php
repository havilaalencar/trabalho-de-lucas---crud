
<?php

$host = 'localhost';
$dbname = 'aula_b4';
$user = 'root';
$password = 'mysql2024';



try {
    $conect = new PDO("mysql:dbname=$dbname;host=$host;charset=utf8",$user,$password); 
    $conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
