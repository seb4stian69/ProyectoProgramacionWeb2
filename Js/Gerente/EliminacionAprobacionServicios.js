// @ts-nocheck

/* Html inputs data creation */

// Select field
let arrayTipoId = ['Servicion uno','Servicion dos','Servicion tres'];
let selectTipoIdField = document.getElementById('selectTipoIdField');

arrayTipoId.forEach( data => {

    let option = document.createElement('option');
    option.id=`${data}`
    option.innerHTML = data;

    selectTipoIdField?.append(option);

});

/* Funcionalidad data de tipo id cambiado */
let tipoIdValue=arrayTipoId[0];
const cambiarTipoId = () =>{ tipoIdValue = document.getElementById("selectTipoIdField")?.value; }

/* Funcionalidad de enviar  */
const enviar = () => {

    let selectTipoIdField = document.getElementById("selectTipoIdField").value
    let detalles = document.getElementById("detalles").value

    let objenctSend = {
        selectTipoIdField: selectTipoIdField,
        detalles: detalles
    }

    alert("Datos enviados")

    sessionStorage.setItem(`datosEnviadosAprobacion - ${selectTipoIdField+detalles}`, JSON.stringify(objenctSend))

}