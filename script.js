let articuloscesta = [];
let articulo = null;


$(() => {

  $(".btn-cesta").click(function () {


    articulo = {
      "nombre": $("#producto" + $(this).attr("id")).html(),
      "precio": $("#precio" + $(this).attr("id")).html()
    }

    if (sessionStorage.getItem('articulos') == null) {
      articuloscesta.push(articulo);
    } else {
      articuloscesta = $.parseJSON(sessionStorage.getItem('articulos'));

      articuloscesta.push(articulo);
    }

    sessionStorage.setItem("articulos", JSON.stringify(articuloscesta));

  })
})