// Redirecciona a Inicio
Mousetrap.bind('ctrl+1', function () {
  window.location.href = "/index.php";
});

// Redirecciona a Tienda
Mousetrap.bind('ctrl+2', function () {
  window.location.href = "/tienda.php";
});

// Redirecciona a Citas
Mousetrap.bind('ctrl+3', function () {
  window.location.href = "/citas.php";
});

// Redirecciona a Adopción
Mousetrap.bind('ctrl+4', function () {
  window.location.href = "/adopcion.php";
});

// Redirecciona a Blog
Mousetrap.bind('ctrl+5', function () {
  window.location.href = "/blog.php";
});

// Redirecciona a Nosotros
Mousetrap.bind('ctrl+6', function () {
  window.location.href = "/nosotros.php";
});

// Redirecciona a Contacto
Mousetrap.bind('ctrl+7', function () {
  window.location.href = "/contacto.php";
});

// Redirecciona a Acceder
Mousetrap.bind('ctrl+8', function () {
  window.location.href = "/login.php";
});


// Mini Reproductor
let player = new Microne(document.getElementById('player'))
player.source("media/vivaldi.mp3");