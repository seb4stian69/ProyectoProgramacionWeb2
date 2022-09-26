// @ts-nocheck

let arrayTipoId = ['Servicio numero uno','Servicio numero dos','Servicio numero tres'];
let selectTipoIdField = document.getElementById('selectTipoIdField');

arrayTipoId.forEach( data => {

    let option = document.createElement('option');
    option.id=`${data}`
    option.innerHTML = data;

    selectTipoIdField?.append(option);

});

let tipoIdValue = arrayTipoId[0];
const cambiarTipoId = () =>{ tipoIdValue = document.getElementById("selectTipoIdField")?.value; }

const enviarTratamiento = () =>{

    let idCliente = document.getElementById("idCliente").value
    let nombres = document.getElementById("nombres").value
    let apellidos = document.getElementById("apellidos").value
    let edad = document.getElementById("edad").value
    let peso = document.getElementById("peso").value
    let correo = document.getElementById("correo").value
    let servicio = tipoIdValue
    let detallesServicio = document.getElementById("detallesServicio").value
    let numeroSesiones = document.getElementById("numeroSesiones").value
    let numeroSesionesFaltantes = document.getElementById("numeroSesionesFaltantes").value

    let sendObject = {
        idCliente: idCliente,
        nombres: nombres,
        apellidos: apellidos,
        edad: edad,
        peso: peso,
        correo: correo,
        servicio: servicio,
        detallesServicio: detallesServicio,
        numeroSesiones: numeroSesiones,
        numeroSesionesFaltantes: numeroSesionesFaltantes
    }

    sessionStorage.setItem(`Tratamiento|${idCliente}`, JSON.stringify(sendObject))
    alert("Tratamiento enviado")

    document.getElementById("idCliente").value = ""
    document.getElementById("nombres").value = ""
    document.getElementById("apellidos").value = ""
    document.getElementById("edad").value = ""
    document.getElementById("peso").value = ""
    document.getElementById("correo").value = ""
    document.getElementById("detallesServicio").value = ""
    document.getElementById("numeroSesiones").value = ""
    document.getElementById("numeroSesionesFaltantes").value = ""

}