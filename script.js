// Redirecciona a Inicio
Mousetrap.bind('ctrl+1', function () {
  window.location.href = "http://localhost:8080/index.php";
});

// Redirecciona a Tienda
Mousetrap.bind('ctrl+2', function () {
  window.location.href = "http://localhost:8080/tienda.php";
});

// Redirecciona a Citas
Mousetrap.bind('ctrl+3', function () {
  window.location.href = "http://localhost:8080/citas.php";
});

// Redirecciona a Adopción
Mousetrap.bind('ctrl+4', function () {
  window.location.href = "http://localhost:8080/adopcion.php";
});

// Redirecciona a Blog
Mousetrap.bind('ctrl+5', function () {
  window.location.href = "http://localhost:8080/blog.php";
});

// Redirecciona a Nosotros
Mousetrap.bind('ctrl+6', function () {
  window.location.href = "http://localhost:8080/nosotros.php";
});

// Redirecciona a Contacto
Mousetrap.bind('ctrl+7', function () {
  window.location.href = "http://localhost:8080/contacto.php";
});

// Redirecciona a Acceder
Mousetrap.bind('ctrl+8', function () {
  window.location.href = "http://localhost:8080/login.php";
});

let player = new Microne(document.getElementById('player'))
player.source("media/vivaldi.mp3");