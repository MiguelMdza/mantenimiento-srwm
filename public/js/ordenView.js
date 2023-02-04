function agregarPlatillo(e) {
    var table = $("#tableContent").DataTable();
    console.log(e);
    var id_platillo, precio, nombre, cantidad, comentarios, subtotal;

    id_platillo = e.id;
    cantidad = Number.parseInt(
        document.getElementById("cantidad" + id_platillo).value
    );
    comentarios = document.getElementById("comentarios" + id_platillo).value;
    nombre = document.getElementById("nombre" + id_platillo).value;
    precio = document.getElementById("precio" + id_platillo).value;

    /*console.log(id_platillo);
    console.log(nombre);
    console.log(precio);
    console.log(cantidad);
    console.log(comentarios);*/
    cantidad = jsBuscar(table, nombre) + cantidad;
    subtotal = cantidad * precio;

    if (cantidad >= 1) {
        if (
            confirm(
                "Realmente desea agregar el platillo: " +
                    nombre +
                    "\n" +
                    "No se podrá eliminar de la orden despues."
            )
        ) {
            var node = table.row
                .add([
                    table.column(0).data().length + 1,
                    nombre,
                    cantidad,
                    subtotal,
                ])
                .draw()
                .node();
            agregarPlatillotoDB(id_platillo);
            limpiarValores(id_platillo);
        }
    } else {
        alert("La cantidad debe ser mayor que 0");
    }
}

function limpiarValores(id) {
    document.getElementById("cantidad" + id).value = "";
    document.getElementById("comentarios" + id).value = "";
}

//función que realiza la busqueda
function jsBuscar(table, nombre_plato) {
    cantidad = 0;
    //realizamos el recorrido solo por las celdas que contienen el código, que es la primera
    $("#tableContent tr")
        .find("td:eq(1)")
        .each(function () {
            //obtenemos el codigo de la celda
            codigo = $(this).html();

            //comparamos para ver si el código es igual a la busqueda
            if (codigo == nombre_plato) {
                //aqui ya que tenemos el td que contiene el codigo utilizaremos parent para obtener el tr.
                trDelResultado = $(this).parent();

                //ya que tenemos el tr seleccionado ahora podemos navegar a las otras celdas con find
                cantidad = trDelResultado.find("td:eq(2)").html();

                //mostramos el resultado en el div
                //$("#mostrarResultado").html("El nombre es: "+nombre+", la edad es: "+edad)

                table.row($(this).parents("tr")).remove().draw();
            }
        });
    return Number.parseInt(cantidad);
}

function agregarPlatillotoDB(id) {
    //var URL = document.getElementById("form_add_plato" + id).getAttribute("action");
    //console.log(URL);
    //var token = $("input[name='_token']").val();
    //var group_id = $(this).val();
    formName = "form_add_plato" + id;
    console.log(formName);

    fetch('/ordenes/addPlatillo', {
        method: "post",
        credentials: "same-origin",
        body: new FormData(document.getElementById(formName)),
    })
        .then((resp) => resp.json())
        .then(function (data) {
            console.log(data);
        })
        .catch(function (error) {
            console.log(error);
        });
}

$(document).ready(function () {
    /*$('#ingr_table').on('childRow.dt', function(e, show, row) {
        console.log((show ? "Showing " : "Hiding ") + "row " + row.index());
    });*/
    var table = $("#tableContent").DataTable({
        language: {
            sProcessing: "Procesando...",
            sLengthMenu: "Mostrar _MENU_ registros",
            sZeroRecords: "No se encontraron resultados",
            sEmptyTable: "Ningún dato disponible en esta tabla",
            sInfo: "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            sInfoEmpty:
                "Mostrando registros del 0 al 0 de un total de 0 registros",
            sInfoFiltered: "(filtrado de un total de _MAX_ registros)",
            sInfoPostFix: "",
            sSearch: "Buscar:",
            sUrl: "",
            sInfoThousands: ",",
            sLoadingRecords: "Cargando...",
            oPaginate: {
                sFirst: "Primero",
                sLast: "Último",
                sNext: "Siguiente",
                sPrevious: "Anterior",
            },
            oAria: {
                sSortAscending:
                    ": Activar para ordenar la columna de manera ascendente",
                sSortDescending:
                    ": Activar para ordenar la columna de manera descendente",
            },
        },
    });
    $('#btnCerrarOrden').click(function (event) {
        var id_orden = $('#id_orden').val();
        var id_mesa = $('#id_mesa').val();
        var win = window.open('/ticket/' + id_mesa+"/"+id_orden, '_blank');
        // Cambiar el foco al nuevo tab (punto opcional)
        win.focus();
    })
});

