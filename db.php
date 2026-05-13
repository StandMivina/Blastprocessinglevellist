<?php
$host = 'localhost';
$db   = 'bpll_db';
$user = 'MivinaGD'; 
$pass = '12kotletka12'; 

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>