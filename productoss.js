function agregarAlCarrito(producto, precio, indice) {
    let carrito = JSON.parse(localStorage.getItem('carrito')) || [];

    carrito.push({ producto, precio, indice, imagen: `${indice}.jpg` });

    localStorage.setItem('carrito', JSON.stringify(carrito));

    actualizarTotal();
}

function agregarAFavoritos(producto) {
    let favoritos = JSON.parse(localStorage.getItem('favoritos')) || [];

    favoritos.push(producto);

    localStorage.setItem('favoritos', JSON.stringify(favoritos));

    alert(`Se ha agregado "${producto}" a favoritos`);
}

function actualizarTotal() {
    let total = calcularTotal();

    document.getElementById('total-precio').innerText = total.toFixed(2);
}

function calcularTotal() {
    let total = 0;
    let carrito = JSON.parse(localStorage.getItem('carrito')) || [];

    carrito.forEach(producto => {
        total += producto.precio;
    });

    return total;
}
// Array que contiene la lista de productos
const listaProductos = [
    { id: 1, nombre: 'Producto 1', precio: 20 },
    { id: 2, nombre: 'Producto 2', precio: 30 },
    // Agrega más productos según sea necesario
  ];
  
  function obtenerProductoPorId(id) {
    return listaProductos.find(producto => producto.id === id);
  }
  
  function buscar() {
    // Obtén el valor de la barra de búsqueda
    var categoria = document.getElementById("barraBusqueda").value.toLowerCase();

    // Redirige a la página correspondiente según la categoría
    switch (categoria) {
        case "marvel":
            window.location.href = "Marvel.html";
            break;
        case "star wars":
            window.location.href = "StarWars.html";
            break;
        case "idols":
            window.location.href = "Idols.html";
            break;
        case "dc":
            window.location.href = "DC.html";
            break;
        case "video games":
            window.location.href = "VideoGames.html";
            break;
        case "cine":
            window.location.href = "Cine.html";
            break;
        case "animadas":
            window.location.href = "Animadas.html";
            break;
        case "lava":
            window.location.href = "Lava.html";
            break;
        case "hielo":
            window.location.href = "Hielo.html";
            break;
        case "sombras":
            window.location.href = "Sombras.html";
            break;
            case "basicas":
                window.location.href = "Basicas.html";
                break;
            case "comunes":
                window.location.href = "Comunes.html";
                break;
            case "rare":
                window.location.href = "Rare.html";
                break;
            case "epicas":
                window.location.href = "Epicas.html";
                break;
            case "legendarias":
                window.location.href = "Legendarias.html";
                break;
            default:
                alert("Categoría no encontrada");
        }
    }