function findMesaById() {
    var tfCantPersonas = document.getElementById("tf-cant-personas");
    fetch("/mesas/view/" + document.getElementById("tf-search-mesa").value)
        .then((resp) => resp.json())
        .then(function (data) {
            console.log(data);
            if(Object.keys(data).length !== 0)
            {
                document.getElementById("hd-id-mesa").value = data.id;
                document.getElementById("hd-id-mesa-delete").value = data.id;
                document.getElementById("id-mesa").innerHTML =
                    "Mesa No. " + data.id;
                document.getElementById("tf-cant-personas").value =
                    data.cant_personas;
                document.getElementById("informacion-mesa").hidden = false;
            }
            else {
                alert("No se encontro información");
            }
        })
        .catch(function (error) {
            console.error(error);
            alert("Ah ocurrido un error al buscar la mesa");
            resetForm();
        });
}

function sendFormMesa() {
    var formulario = document.getElementById("form-mesa");
    formulario.submit();
}

function deleteMesa() {
    var formulario = document.getElementById("form-mesa-delete");
    formulario.submit();
}

function editInformacion(e) {
    var idElement = e.id;
    var btnSave = document.getElementById("btn-guardar-mesa");
    var btnDelete = document.getElementById("btn-eliminar-mesa");

    var tfCantPersonas = document.getElementById("tf-cant-personas");
    if (idElement == "rad-edit-info" && e.checked) {
        btnSave.hidden = false;
        btnDelete.hidden = true;
        tfCantPersonas.readOnly = false;
    } else {
        tfCantPersonas.readOnly = true;
        btnSave.hidden = true;
        btnDelete.hidden = false;
    }
}

function resetForm() {
    document.getElementById("tf-search-mesa").value = "";
    document.getElementById("hd-id-mesa").value = "";
    document.getElementById("id-mesa").innerHTML = "Mesa No. #";
    document.getElementById("tf-cant-personas").value = "";
    document.getElementById("rad-edit-info").checked = false;
    document.getElementById("rad-delete-info").checked = false;
    document.getElementById("informacion-mesa").hidden = true;
    document.getElementById("btn-guardar-mesa").hidden = true;
    document.getElementById("btn-eliminar-mesa").hidden = true;
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
