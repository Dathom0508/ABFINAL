<?php
session_start();
include 'config.php';

if (isset($_SESSION['user_id']) && isset($_SESSION['is_admin']) && $_SESSION['is_admin']) {

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Error de conexión a la base de datos: " . $conn->connect_error);
    }

    $sql_pedidos = "SELECT * FROM figurasfornite";  
    $result_pedidos = $conn->query($sql_pedidos);
    ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pedidos - Panel de Administrador</title>
    <style>
    
    </style>
</head>
<body>
  

    <section>
        <h2>Pedidos</h2>
        <table>
            <tr>
                <th>Código de Pedido</th>
                <th>Categoría</th>
                <th>Nombre</th>
                <th>Unidades</th>
            </tr>
           
            <?php
                while ($row = $result_pedidos->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['codigopedido'] . "</td>";
                    echo "<td>" . $row['Categoria'] . "</td>";
                    echo "<td>" . $row['Nombre'] . "</td>";
                    echo "<td>" . $row['Unidades'] . "</td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </section>


    </body>
</html>

<?php

    $conn->close();
} else {
    header("Location: inicio.php");
    exit();
}
?>
