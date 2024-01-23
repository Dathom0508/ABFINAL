<?php
session_start();

function usuarioAutenticado() {
    return isset($_SESSION['usuario']);
}

function esAdmin() {
    return isset($_SESSION['usuario']) && $_SESSION['rol'] === 'administrador';
}

function redirigirSiNoAutenticado() {
    if (!usuarioAutenticado()) {
        header('Location: figura.php');
        exit();
    }
}

function redirigirSiNoEsAdmin() {
    if (!esAdmin()) {
        header('Location: figura.php'); 
        exit();
    }
}
?>
