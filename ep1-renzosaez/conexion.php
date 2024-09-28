<?php
$servidor ="mysql:dbname=ep1-renzosaez;host=localhost";
$user ="root";
$pass="321";
try {
    $pdo = new PDO($servidor, $user, $pass,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAME utf8"));
} catch (PDOException $e) {
    echo "conexion fallida" .$e->getMessage();
}


?>

