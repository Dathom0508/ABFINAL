<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'config.php';
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['user_nombre'] = $row['nombre'];
        if ($row['rol'] == 'administrador') {
            header("Location: inicio.php");
        } else {
            header("Location: inicio.php");
        }
        exit();
    } else {
        $error_message = "Usuario y/o contraseña incorrectos.";
    }
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - Mini Figuras de Fortnite</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-...." crossorigin="anonymous" />
</head>
<body>
    <header>
        <div class="Encabezado-principal">
            <a href="index.html">
                <img src="imagenes/logo.jpg" alt="Logo de la tienda">
            </a>
            <div class="idioma">
                <a href="#">Español</a> 
                <a href="#">English</a>
            </div>
            <div class="titulo-principal">
                <h1>BIENVENIDOS A MINI FIGURAS FORNITE</h1>
            </div>
            <div class="inicio">
                <a href="index.html">Inicio</a> 
            </div>
            <div class="usuario">
                <a href="#">Iniciar Sesión</a> 
                <a href="#">Registrarse</a>
            </div>
        </div>
    </header>

    <section class="formulario">
        <h2>Iniciar Sesión</h2>
        <form action="login_process.php" method="post">
            <label for="email">Correo:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Iniciar Sesión</button>
        </form>
        <p>¿No tienes una cuenta? <a href="register.php">Regístrate aquí</a></p>
    </section>

    <footer>

        <div class="footer-column">
            <div class="logo">
               <img id="logo-footer" src="imagenes/logo.jpg" alt="Logo de la tienda">
            </div>
            <a href="figura.php">Pide tu figura</a>
            <a href="catalogo.html">Catálogo</a>
        </div>
    
        <div class="footer-column">
            <h4>QUIÉNES SOMOS</h4>
            <a href="quienessomos.html">FORNITE®MinifigurasAction</a>
        </div>
    
        <div class="footer-column">
            <h4>ATENCIÓN AL CLIENTE</h4>
            <a href="ayuda.html">Ponte en contacto con nosotros</a>
            <a href="ayuda.html">Envíos y devoluciones</a>
            <a href="ayuda.html">Métodos de pago</a>
        </div>
    
        <div class="social-icon">
            <h4>SÍGUENOS</h4>
     
            <a href="https://www.facebook.com/tu_pagina" target="_blank" class="social-icon"><i class="fab fa-facebook"></i></a>
 
            <a href="https://twitter.com/tu_pagina" target="_blank" class="social-icon"><i class="fab fa-twitter"></i></a>
   
            <a href="https://www.instagram.com/tu_pagina" target="_blank" class="social-icon"><i class="fab fa-instagram"></i></a>
         
            <a href="https://wa.me/tunumerodetelefono" target="_blank" class="social-icon"><i class="fab fa-whatsapp"></i></a>
      
            <a href="https://www.tiktok.com/@tu_usuario" target="_blank" class="social-icon"><i class="fab fa-tiktok"></i></a>
      
            <a href="https://www.epicgames.com/fortnite" target="_blank" class="social-icon"><i class="fab fa-fort-awesome"></i></a>
          
        </div>

    
    </footer>
    <nav class="enlaces-adicionales">
        <a href="ayuda.html" class="footer-link">Política de privacidad</a>
        <a href="ayuda.html"class="footer-link">Cookies</a>
        <a href="ayuda.html"footer-link">Aviso legal</a>
        <a href="ayuda.html" class="footer-link">Cláusulas de uso</a>
        <a href="ayuda.html" class="footer-link">Accesibilidad</a>
        <a href="ayuda.html" class="footer-link">Configuración de cookies</a>
      </nav>

      <div class="footer-texto">
        <p>FORNITE®MinifigurasAction, España. Solo se permite la compra en línea a personas mayores de 18 años. FORNITE®MinifigurasAction, figuras de acción, es una marca privada creada por un fan de FORNITE. Todos los derechos reservados. FORNITE®MinifigurasAction fue creada con fines de estudio, como proyecto para MSMK university. El uso de este sitio supone la aceptación de las cláusulas de uso. FORNITE®Minifiguras</p>
    </div>

    <script src="productoss.js"></script>
    <script src="carrito.js"></script>
    <script src="carrusel.js"></script>
</body>
</html>