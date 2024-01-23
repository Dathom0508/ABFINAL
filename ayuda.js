function mostrarContenido(seccion) {
    document.querySelectorAll('.ayudas div').forEach(function(div) {
        div.style.display = 'none';
    });
    document.getElementById(seccion).style.display = 'block';
}