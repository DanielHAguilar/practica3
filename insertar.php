<?php
include "conexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $precio = $_POST["precio"];
    $existencia = $_POST["existencia"];

    if (!empty($nombre) && !empty($precio) && !empty($existencia)) {
        $sql = "INSERT INTO productos (nombre, precio, existencia) VALUES (:nombre, :precio, :existencia)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":nombre", $nombre);
        $stmt->bindParam(":precio", $precio);
        $stmt->bindParam(":existencia", $existencia);

        if ($stmt->execute()) {
            echo "Producto agregado correctamente.";
        } else {
            echo "Error al agregar el producto.";
        }
    } else {
        echo "Todos los campos son obligatorios.";
    }
}
?>
