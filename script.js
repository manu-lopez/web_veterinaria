// Redirecciona a Inicio
Mousetrap.bind('shift+1', function () {
  window.location.href = "/index.php";
});

// Redirecciona a Tienda
Mousetrap.bind('shift+2', function () {
  window.location.href = "/tienda.php";
});

// Redirecciona a Citas
Mousetrap.bind('shift+3', function () {
  window.location.href = "/citas.php";
});

// Redirecciona a Adopción
Mousetrap.bind('shift+4', function () {
  window.location.href = "/adopcion.php";
});

// Redirecciona a Blog
Mousetrap.bind('shift+5', function () {
  window.location.href = "/blog.php";
});

// Redirecciona a Nosotros
Mousetrap.bind('shift+6', function () {
  window.location.href = "/nosotros.php";
});

// Redirecciona a Contacto
Mousetrap.bind('shift+7', function () {
  window.location.href = "/contacto.php";
});

// Redirecciona a Acceder
Mousetrap.bind('shift+8', function () {
  window.location.href = "/login.php";
});


// Mini Reproductor
let player = new Microne(document.getElementById('player'))
player.source("media/vivaldi.mp3");