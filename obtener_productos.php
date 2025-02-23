<?php
include "conexion.php";

$sql = "SELECT * FROM productos";
$stmt = $pdo->query($sql);

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>
            <td>{$row['idprod']}</td>
            <td>{$row['nombre']}</td>
            <td>\${$row['precio']}</td>
            <td>{$row['existencia']}</td>
            <td><span class='eliminar' data-id='{$row['idprod']}'>Eliminar</span></td>
          </tr>";
}
?>
