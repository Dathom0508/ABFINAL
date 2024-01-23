<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

include 'config.php';
$usuario_id = $_SESSION['user_id'];
$sql_select_pedidos = "SELECT * FROM pedidos WHERE usuario_id = ?";
$stmt_select_pedidos = $conn->prepare($sql_select_pedidos);
$stmt_select_pedidos->bind_param("i", $usuario_id);
$stmt_select_pedidos->execute();
$result_pedidos = $stmt_select_pedidos->get_result();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ver Pedidos</title>
    <link rel="stylesheet" href="styles.css">
   
    <h2>Tus Pedidos</h2>
    
    <?php
    if ($result_pedidos->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>ID</th><th>Nombre de la Figura</th><th>Cantidad</th></tr>";

        while ($row = $result_pedidos->fetch_assoc()) {
            echo "<tr><td>{$row['id']}</td><td>{$row['nombre_figura']}</td><td>{$row['cantidad']}</td></tr>";
        }

        echo "</table>";
    } else {
        echo "<p>No tienes pedidos realizados.</p>";
    }
    ?>

    <p><a href="realizarpedido.php">Realizar Nuevo Pedido</a></p>
    
    <p><a href="index.php">Volver a la Página Principal</a></p>

</body>
</html>

<?php
$stmt_select_pedidos->close();
$conn->close();
?>

