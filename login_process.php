<?php
include 'config.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql_check_user = "SELECT * FROM usuarios WHERE usuario = ?";
$stmt_check_user = $conn->prepare($sql_check_user);
$stmt_check_user->bind_param("s", $email);
$stmt_check_user->execute();
$result_check_user = $stmt_check_user->get_result();

if ($result_check_user->num_rows > 0) {
    $user = $result_check_user->fetch_assoc();

    if (password_verify($password, $user['contrasena'])) {
    
        session_start();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['nombre'];
        $_SESSION['is_admin'] = $user['es_administrador'];

        header("Location: inicio.php"); 
        exit();
    } else {
        echo "Contraseña incorrecta. Por favor, inténtalo de nuevo.";
    }
} else {
    echo "Usuario no encontrado. Por favor, regístrate.";
}

$stmt_check_user->close();
$conn->close();
?>
