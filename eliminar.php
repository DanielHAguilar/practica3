<?php
include "conexion.php";

if (isset($_GET["idprod"])) {
    $idprod = $_GET["idprod"];

    $sql = "DELETE FROM productos WHERE idprod = :idprod";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":idprod", $idprod);

    if ($stmt->execute()) {
        echo "Producto eliminado correctamente.";
    } else {
        echo "Error al eliminar el producto.";
    }
}
?>
