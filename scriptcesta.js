const mapa = new Map();
const mapa2 = new Map();
let contadoresArticulos = [];
let nombresArticulos = [];
let preciosArticulos = [];
let precioTotal = 0;
var articulos = [];
$(() => {

    articulos = $.parseJSON(sessionStorage.getItem('articulos'));

    ColocaArticulos(articulos);

    CreaArticulos(mapa, contadoresArticulos, nombresArticulos, preciosArticulos);

    $(".cuerpo-cesta").on("click", ".btnquitar", function () {

        articulos = $.parseJSON(sessionStorage.getItem('articulos'));

        let elementoAQuitar = $(this).val();

        var filtered = articulos.filter(function (value, index, arr) {

            return value.nombre != elementoAQuitar;

        });

        console.log(filtered);
        mapa.clear();
        mapa2.clear();

        contadoresArticulos = [];
        nombresArticulos = [];
        preciosArticulos = [];
        precioTotal = 0;

        ColocaArticulos(filtered);

        CreaArticulos(mapa, contadoresArticulos, nombresArticulos, preciosArticulos);

        sessionStorage.setItem("articulos", JSON.stringify(filtered));

    })

})

ColocaArticulos = (articulos) => {

    for (let i = 0; i < articulos.length; i++) {
        clave = articulos[i].nombre;

        if (mapa.has(clave))
            mapa.set(clave, mapa.get(clave) + 1);
        else
            mapa.set(clave, 1);
    }

    for (let i = 0; i < articulos.length; i++) {
        clave = articulos[i].nombre;
        precio = articulos[i].precio;

        if (mapa2.has(clave))
            mapa2.set(clave, parseFloat(mapa2.get(clave)) + parseFloat(precio));
        else
            mapa2.set(clave, precio);
    }

    let valoresArticulos = mapa.values();
    let nombresArticulosMapa = mapa.keys();
    let preciosArticulosMapa = mapa2.values();

    for (let i = 0; i < mapa.size; i++) {
        contadoresArticulos.push(valoresArticulos.next().value)
    }

    for (let i = 0; i < mapa.size; i++) {
        nombresArticulos.push(nombresArticulosMapa.next().value)
    }

    for (let i = 0; i < mapa2.size; i++) {
        preciosArticulos.push(preciosArticulosMapa.next().value)
    }

    for (let i = 0; i < preciosArticulos.length; i++) {
        precioTotal += parseFloat(preciosArticulos[i]);
    }
}


CreaArticulos = (mapa, contadoresArticulos, nombresArticulos, preciosArticulos) => {

    let cuerpoCesta = "";

    for (let i = 0; i < mapa.size; i++) {
        cuerpoCesta += `

        <div class="row">
                                        <div class="col-md-4 ">
                                            <div class="form-group">
                                                <div class="texto-entrada">
                                                    <div class="form-group">
                                                        <h4>${nombresArticulos[i]}</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 ">
                                            <div class="texto-entrada">
                                                <div class="form-group">
                                                    <h4>Cantidad : ${contadoresArticulos[i]}</h4>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-3 ">
                                            <div class="texto-entrada">
                                                <div class="form-group">
                                                    <h4>Precio : ${preciosArticulos[i]}€</h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 ">
                                        <div class="texto-entrada ">
                                                <button value="${nombresArticulos[i]}" class="btnquitar" id="${i}">Quitar</button>
                                        </div>
                                    </div>
            </div>

        `
    }

    $(".cuerpo-cesta").html(cuerpoCesta)

    $("#precio-total").html(precioTotal + "€");


}