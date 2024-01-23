<?php
include 'config.php';

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$password = $_POST['password'];

$nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

$admin_email = 'davidli@msmk.university'; 

if ($email == $admin_email) {
    $admin = 1;
} else {
    $admin = 0;
}

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$sql_check_user = "SELECT * FROM usuarios WHERE usuario = ?";
$stmt_check_user = $conn->prepare($sql_check_user);
$stmt_check_user->bind_param("s", $email);
$stmt_check_user->execute();
$result_check_user = $stmt_check_user->get_result();

if ($result_check_user->num_rows > 0) {
    echo "Este correo ya está registrado. Por favor, inicia sesión.";
} else {
    $sql_insert_user = "INSERT INTO usuarios (nombre, usuario, contrasena, es_administrador) VALUES (?, ?, ?, ?)";
    $stmt_insert_user = $conn->prepare($sql_insert_user);
    $stmt_insert_user->bind_param("sssi", $nombre, $email, $hashed_password, $admin);

    if ($stmt_insert_user->execute()) {
        echo "Registro exitoso. Ahora puedes iniciar sesión.";
    } else {
        echo "Error al registrar. Por favor, inténtalo de nuevo.";
    }

    $stmt_insert_user->close();
}

$stmt_check_user->close();
$conn->close();
?>


