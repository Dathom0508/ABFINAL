document.addEventListener("DOMContentLoaded", function () {
    var carrusel = document.querySelector('.carrusel');
    var flechaIzquierda = document.querySelector('.flecha-izquierda');
    var flechaDerecha = document.querySelector('.flecha-derecha');

    flechaIzquierda.addEventListener('click', function () {
        carrusel.scrollLeft -= 200;
    });

    flechaDerecha.addEventListener('click', function () {
        carrusel.scrollLeft += 200;
    });

    carrusel.addEventListener('mouseenter', function () {
        carrusel.classList.add('pausa-desplazamiento');
    });

    carrusel.addEventListener('mouseleave', function () {
        carrusel.classList.remove('pausa-desplazamiento');
    });
});
