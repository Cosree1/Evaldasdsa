<?php
require("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['codigo'], $_POST['producto'], $_POST['precio'], $_POST['cantidad'])) {
    $codigo = $_POST['codigo'];
    $producto = $_POST['producto'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];

    try {
        $query = $pdo->prepare("INSERT INTO productos (codigo, producto, precio, cantidad) VALUES (:cod, :pro, :pre, :cant)");
        $query->bindParam(":cod", $codigo);
        $query->bindParam(":pro", $producto);
        $query->bindParam(":pre", $precio);
        $query->bindParam(":cant", $cantidad);
        $query->execute();

        echo "ok"; // 
    } catch (PDOException $e) {
        
        error_log("Error en la inserción: " . $e->getMessage());
        echo "Error en la inserción. Por favor, inténtelo de nuevo.";
    }
} else {
    echo "Datos incompletos.";
}
?>