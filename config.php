<?php
define('USER', 'root');
define('PASSWORD', '');
define('HOST', '');
define('DATABASE', 'laboratorio2');
try {
    $conn = new PDO('mysql:host=' . HOST . ';dbname=' . DATABASE, USER, PASSWORD);
} catch (PDOException $e) {
    die('Error : ' . $e->getMessage());
}

include_once ('clases/autos.php');
$llamado = new Autos($conn);
?>