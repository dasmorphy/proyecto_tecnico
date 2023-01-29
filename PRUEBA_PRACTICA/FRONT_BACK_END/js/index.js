const formDatos = document.getElementById("formDatos");
const nombre = document.getElementById("nombre");
const area = document.getElementById("area");
const tramite = document.getElementById("tramite");
const observacion = document.getElementById("observacion");
const estado = document.getElementById("estado");


$(document).ready(function() {
    $("#image").on("change", function() {
        var uploadFoto = document.getElementById("image").value;
        var foto = document.getElementById("image").files;

        var contactAlert = document.getElementById('form_alert');

        if (uploadFoto != '') {
            var type = foto[0].type;
            if (type != 'image/jpeg' && type != 'image/jpg' && type != 'image/png') {
                contactAlert.innerHTML = '<p class="errorArchivo">El archivo no es válido.</p>';
                $('#image').val('');
                return false;
            } else {
                contactAlert.innerHTML = '';
            }
        }
    });
});

let arregloDatos = [];
formDatos.onsubmit = (e) => {
    e.preventDefault();
    let objDatos = {
        nombre: nombre.value,
        area: area.value = ($('select[id="area"] option:selected').text()),

        tramite: tramite.value = ($('select[id="tramite"] option:selected').text()),
        observacion: observacion.value,
        estado: estado.value,



    };
    //console.log(objDatos);
    arregloDatos.push(objDatos);
    let datos = { "data": arregloDatos };
    //console.log(datos)

    let json = JSON.stringify(datos);
    console.log(json);


    $.ajax({
        url: './src/guardar.php',
        type: 'POST',
        dataType: 'json',
        data: { "json": json },
        success: function(respuesta) {

            console.log(respuesta, "ok");
        },
        error: function(mensaje) {
            if (mensaje) {
                //alert(mensaje)
                alert(mensaje.responseText)
            } else {
                alert(mensaje.responseText)

            }

            //console.log(resp.responseText, "error");
        }

    })

};