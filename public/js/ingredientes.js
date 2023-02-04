//const { data } = require("jquery");

function findIngredienteById() {
    console.log(document.getElementById("tf-search-ingr").value);
    fetch("/ingredientes/view/" + document.getElementById("tf-search-ingr").value)
        .then((resp) => resp.json())
        .then(function (data) {
            console.log(data);
            if(Object.keys(data).length !== 0)
            {
                document.getElementById("hd-id-ingr").value = data.id;
                document.getElementById("id-ingrediente").innerHTML =
                    "Ingrediente No. " + data.id;
                document.getElementById("tf_nombre_ingr").value =
                    data.nombre;
                document.getElementById("cant_ingr").value =
                    data.cantidad;
                document.getElementById("costo_ingr").value =
                    data.costo;
                document.getElementById("proveedor_id_"+data.id_proveedor).selected = true;
                document.getElementById("informacion-ingred").hidden = false;
            } else {
                alert("No se encontro informacion")
                resetForm();
            }
        })
        .catch(function (error) {
            console.error(error);
            alert("Ah ocurrido un error al buscar el ingrediente");
            resetForm();
        });
}

function sendFormIngr() {
    var formulario = document.getElementById("form-ingr");
    formulario.submit();
}

function editInformacion() {
    var e = document.getElementById("edit_info");
    if(e.checked){
        document.getElementById("tf_nombre_ingr").readOnly = false;
        document.getElementById("cant_ingr").readOnly = false;
        document.getElementById("costo_ingr").readOnly = false;
        document.getElementById("select_proveedor").disabled = false;
        document.getElementById("btn-guardar-ingred").hidden = false;
    } else {
        document.getElementById("tf_nombre_ingr").readOnly = true;
        document.getElementById("cant_ingr").readOnly = true;
        document.getElementById("costo_ingr").readOnly = true;
        document.getElementById("select_proveedor").disabled = true;
    }
}

function resetForm() {
    document.getElementById("tf_nombre_ingr").readOnly = true;
    document.getElementById("tf_nombre_ingr").value = "";
    document.getElementById("cant_ingr").readOnly = true;
    document.getElementById("cant_ingr").value = "";
    document.getElementById("costo_ingr").readOnly = true;
    document.getElementById("costo_ingr").value = "";
    document.getElementById("select_proveedor").disabled = true;
    document.getElementById("btn-guardar-ingred").hidden = true;
    document.getElementById("informacion-ingred").hidden = true;
}

function disableEnterKey(e) {
    var key;
    if (window.event) {
        key = window.event.keyCode; //IE
    } else {
        key = e.which; //firefox
    }
    if (key == 13) {
        return false;
    } else {
        return true;
    }
}
