$(document).ready(function () {
    function cargarJSON(callback) {
        var xhr = new XMLHttpRequest();
        xhr.overrideMimeType("application/json");
        xhr.open('GET', '../json/productos.json', true);
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                callback(xhr.responseText);
            }
        };
        xhr.send(null);
    }
// Utilizar la función para cargar el archivo JSON
    cargarJSON(function (response){
        var datos = JSON.parse(response);
        for(var i = 1; i<=48; i++){
            var objeto = "producto"+i
            var producto = datos[objeto]
            var nombreProducto = producto.nombre
            var categoria = producto.categoria
            console.log(nombreProducto)
            $(".main-gallery").append("<div class='product-container'  categoria='" + categoria + "'><img src='../img/escaparate_general.png' alt='MDN' /><p>" + nombreProducto + "</p> <button class='btn-saberMas'> Saber más...</button></div>");
        }
    });
})
$(document).on("click", ".btn-saberMas", function(){
    alert("Al hacer click, desplegará un recuadro que les recomiende registrarse para consultar su catálogo y sus precios")
})
$(document).on("click", "#btn-descargar", function(){
    alert("Al hacer click, los redirigirá a la página del login, y si ya están logeados, entonces se descargará el catálogo")
})
$(document).on("click", "#filtro-select_cancelar", function(){
    // alert("xd")
    $("#filtro_mobile").addClass("noneVisible")
    console.log($("#filtro_mobile").hasClass("noneVisible"));
})

$(document).on("click","#filtrarMobile", function(){
    $("#filtro_mobile").removeClass("noneVisible")
    console.log($("#filtro_mobile").hasClass("noneVisible"));
})