<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Procesar el formulario de realizar pedido
    $nombre_figura = $_POST['nombre_figura'];
    $cantidad = $_POST['cantidad'];
    $usuario_id = $_SESSION['user_id'];

    $sql_insert_pedido = "INSERT INTO pedidos (usuario_id, nombre_figura, cantidad) VALUES (?, ?, ?)";
    $stmt_insert_pedido = $conn->prepare($sql_insert_pedido);
    $stmt_insert_pedido->bind_param("iss", $usuario_id, $nombre_figura, $cantidad);

    if ($stmt_insert_pedido->execute()) {
        echo "Pedido realizado con éxito.";
    } else {
        echo "Error al realizar el pedido. Por favor, inténtalo de nuevo.";
    }

    $stmt_insert_pedido->close();
}

// Obtener los pedidos del usuario
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
    <!-- Agrega cualquier otro estilo que desees -->
</head>
<body>
    <h2>Tus Pedidos</h2>
    
    <?php
    if ($result_pedidos->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>ID</th><th>Nombre de la Figura</th><th>Cantidad</th></tr>";

        while ($row = $result_pedidos->fetch_assoc()) {
            echo "<tr><td>{$row['id_pedido']}</td><td>{$row['nombre_figura']}</td><td>{$row['cantidad']}</td></tr>";
        }

        echo "</table>";
    } else {
        echo "<p>No tienes pedidos realizados.</p>";
    }
    ?>

    <h2>Realizar Nuevo Pedido</h2>
    <form action="realizarpedido.php" method="post">
        <label for="nombre_figura">Nombre de la Figura:</label>
        <input type="text" id="nombre_figura" name="nombre_figura" required>

        <label for="cantidad">Cantidad:</label>
        <input type="number" id="cantidad" name="cantidad" required>

        <button type="submit">Realizar Pedido</button>
    </form>

    <p><a href="verpedido.php">Ver tus Pedidos</a></p>
    <p><a href="index.php">Volver a la Página Principal</a></p>

</body>
</html>

<?php
$stmt_select_pedidos->close();
$conn->close();
?>
