<?php
session_start();

if (isset($_SESSION['user_id']) && isset($_SESSION['user_name']) && isset($_SESSION['is_admin'])) {
    $user_name = $_SESSION['user_name'];
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Figuras de Fortnite</title>
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
            <?php
            if (isset($_SESSION['user_id']) && isset($_SESSION['user_name']) && isset($_SESSION['is_admin'])) {
                $user_name = $_SESSION['user_name'];
                echo " $user_name!";

                if ($_SESSION['is_admin']) {
                    echo '<a href="pide.php">Administración</a>'; 
                    echo '<a href="index.html">Salir</a>';
                } else {
                    echo '<a href="index.html">Cerrar sesión</a>';
                }
            } else {

            }
            ?>
        </div>
    </div>
</header>


    <div class="Encabezado-secundario">
        <div class="carrito">
            <a href="carrito.html">Carrito de Compras</a>
        </div>
        <div class="rebajas">
            <a href="rebajas.html">Rebajas</a>
        </div>
        <div class="ayuda">
            <a href="ayuda.html">Ayuda</a>
        </div>
        <div class="lista-deseos">
            <a href="lista-deseos.html">Lista de Deseos</a>
        </div>
    </div>
    <div class="buscador">
        <input type="text" id="barraBusqueda" placeholder="Buscar por categoría">
        <button onclick="buscar()">Buscar</button>
    </div>

    <section class="seccion-destacada">
        <img src="imagenes/Fondo.jpg" alt="Las mejores figuras del mes">
        <div class="boton-destacado">
            <a href="mejores-figuras.html">LAS MEJORES FIGURAS DEL MES</a>
        </div>
    </section>   

    <section class="figuras-destacadas">
    <h2>Nuestras Figuras Destacadas</h2>

    <div class="figura">
        <a href="Marvel.html">
            <img src="imagenesfiguras/22.jpg" alt="Marvel">
        </a>
        <p>Marvel</p>
    </div>
    <div class="figura">
        <a href="StarWars.html">
            <img src="imagenes/StarWars.jpg" alt="Star Wars">
        </a>
        <p>Star Wars</p>
    </div>
    <div class="figura">
        <a href=" Idols.html">
            <img src="imagenes/Idols.jpg" alt="Idols">
        </a>
        <p>Idols</p>
    </div>
    <div class="figura">
        <a href="DC.html">
            <img src="imagenesfiguras/43.jpg" alt="DC">
        </a>
        <p>DC</p>
    </div>
    <div class="figura">
        <a href="VideoGames.html">
            <img src="imagenesfiguras/60.jpg" alt="Video Games">
        </a>
        <p>Video Games</p>
    </div>
    <div class="figura">
        <a href="Cine.html">
            <img src="imagenesfiguras/73.jpg" alt="Cine">
        </a>
        <p>Cine</p>
    </div>
    <div class="figura">
        <a href="Animadas.html">
            <img src="imagenes/Animadas.jpg" alt="Animadas">
        </a>
        <p>Animadas</p>
    </div>
    <div class="figura">
        <a href="Lava.html">
            <img src="imagenes/Lava.jpg" alt="Lava">
        </a>
        <p>Lava</p>
    </div>
    <div class="figura">
        <a href="Hielo.html">
            <img src="imagenes/Hielo.jpg" alt="Hielo">
        </a>
        <p>Hielo</p>
    </div>
    <div class="figura">
        <a href="Sombras.html">
            <img src="imagenesfiguras/113.jpg" alt="Sombras">
        </a>
        <p>Sombras</p>
    </div>
    </section>

    <div class="titulo-categorias">
        <h3>Todas las Categorías</h3>
    </div>
    <div class="flechas-carrusel">
        <div class="flecha-izquierda">&#9665;</div>
    </div>
    <section class="carrusel">
        <div class="imagenes">
          <a href="Acuaticas.html" class="imagen-link" title="Imagen 1">
            <img src="imagenes/Acuatica.jpg" alt="Imagen 1">
            <p>Acuaticas</p>
          </a>
          <a href="Oscuras.html" class="imagen-link" title="Imagen 2">
            <img src="imagenes/Oscuras.jpg" alt="Imagen 2">
            <p>Oscuras</p>
          </a>
          <a href="Lava.html" class="imagen-link" title="Imagen 3">
            <img src="imagenes/Lava2.jpg" alt="Imagen 3">
            <p>Lava</p>
          </a>
          <a href="Hielo.html" class="imagen-link" title="Imagen 4">
            <img src="imagenes/Hielo2.jpg" alt="Imagen 4">
            <p>Hielo</p>
          </a>
          <a href="Sombras.html" class="imagen-link" title="Imagen 5">
            <img src="imagenes/Sombra2.jpg" alt="Imagen 5">
            <p>Sombras</p>
          </a>
          <a href="Cine.html" class="imagen-link" title="Imagen 6">
            <img src="imagenes/Cine2.jpg" alt="Imagen 6">
            <p>Cine</p>
          </a>
          <a href="Animadas.html" class="imagen-link" title="Imagen 7">
            <img src="imagenes/Animadas2.jpg" alt="Imagen 7">
            <p>Animadas</p>
           </a>
           <a href="VideoGames.html" class="imagen-link" title="Imagen 8">
            <img src="imagenes/VideoJuegos2.jpg" alt="Imagen 8">
            <p>Video Juegos</p>
          </a>
          <a href="Idols.html" class="imagen-link" title="Imagen 9">
            <img src="imagenes/Idols2.jpg" alt="Imagen 9">
            <p>Idols</p>
          </a>
          <a href="StarWars.html" class="imagen-link" title="Imagen 10">
            <img src="imagenes/Starwars2.jpg" alt="Imagen 10">
            <p>Star Wars</p>
          </a>
          <a href="Marvel.html" class="imagen-link" title="Imagen 11">
            <img src="imagenes/Marvel2.jpg" alt="Imagen 11">
            <p>Marvel</p>
          </a>
          <a href="DC.html" class="imagen-link" title="Imagen 12">
            <img src="imagenes/DC2.jpg" alt="Imagen 12">
            <p>DC</p>
          </a>
        </div>
    </section>
    <div class="flechas-carrusel">
        <div class="flecha-derecha">&#9655;</div>
    </div>

    <section class="figurasporclase">
        <h2>Figuras Por Clase</h2>
        <div class="figurasclase">
            <a href="Basicas.html">
                <img src="imagenes/Basica.jpg" alt="Basicas">
            </a>
            <p>Basicas</p>
        </div>
        <div class="figurasclase">
            <a href="Comunes.html">
                <img src="imagenes/comun.jpg" alt="Comunes">
            </a>
            <p>Comunes</p>
        </div>
       
        <div class="figurasclase">
            <a href="rare.html">
                <img src="imagenes/rara.jpg" alt="Raras">
            </a>
            <p>Raras</p>
        </div>
        <div class="figurasclase">
            <a href="Epicas.html">
                <img src="imagenes/epica.jpg" alt="Epicas">
            </a>
            <p>Epicas</p>
        </div>
        <div class="figurasclase">
            <a href="Legendarias.html">
                <img src="imagenes/legendaria.jpg" alt="Legendarias">
            </a>
            <p>Legendarias</p>
        </div>

    <section class="bienvenida">
        <div class="contenido-bienvenida">
            <p>Te damos la bienvenida a la Tienda Online FORNITE®MinifigurasAction, donde encontrarás fantásticas figuras del Video Juego FORNITE, increíbles sets de colección para grandes fans de FORNITE. Elige tu figura favorita o pídela y nosotros te la haremos. Adelanta las compras navideñas con los sets y las ofertas disponibles durante el fin de semana FORNITE®MinifigurasAction, el Black Friday y el Cyber Monday. Podrás comprar fácilmente figuras con los que regalar horas de diversión y juego imaginativo.</p>
        </div>
    </section>

    <footer>

        <div class="footer-column">
            <div class="logo">
               <img id="logo-footer" src="imagenes/logo.jpg" alt="Logo de la tienda">
            </div>
            <a href="realizarpedido.php">Pide tu figura</a>
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