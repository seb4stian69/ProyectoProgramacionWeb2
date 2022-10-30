// @ts-nocheck

/* Html inputs data creation */

// Select field
let arrayTipoId = ['CC','TI','CE'];
let selectTipoIdField = document.getElementById('selectTipoIdField');

arrayTipoId.forEach( data => {

    let option = document.createElement('option');
    option.id=`${data}`
    option.innerHTML = data;

    selectTipoIdField?.append(option);

});

/* Funcionalidad data de tipo id cambiado */
let tipoIdValue;
const cambiarTipoId = () =>{ tipoIdValue = document.getElementById("selectTipoIdField")?.value; }

/* Funcionalidad de enviar documento */
const enviarDatosDelPaciente = () =>{

    // Datos paciente
        let textNumeroIdField = document.getElementById('textNumeroIdField').value;
        let textNombresField = document.getElementById('textNombresField').value;
        let textApellidosField = document.getElementById('textApellidosField').value;
        let textDireccionResidenciaField = document.getElementById('textDireccionResidenciaField').value;
        let textNumeroCelularField = document.getElementById('textNumeroCelularField').value;
        let textCorreoField = document.getElementById('textCorreoField').value;
        let dateFechaNacimientoField = document.getElementById('dateFechaNacimientoField').value;

    // Datos acompañante
        let textNombresAcompañanteField = document.getElementById('textNombresAcompañanteField').value;
        let textApellidosAcompañanteField = document.getElementById('textApellidosAcompañanteField').value;   
        let textDireccionAcompañanteField = document.getElementById('textDireccionAcompañanteField').value;   
        let textNumeroCelularAcompañanteField = document.getElementById('textNumeroCelularAcompañanteField').value;   
        let textCorreoAcompañante = document.getElementById('textCorreoAcompañante').value;
        let dateFechaNacimientoAcompañanteField = document.getElementById('dateFechaNacimientoAcompañanteField').value;

    // Objeto enviado
        let requestObject = {

            tipoId: tipoIdValue,
            numeroIdentificacion: textNumeroIdField,
            nombre: textNombresField,
            apellidos: textApellidosField,
            direccion: textDireccionResidenciaField,
            numeroCelular: textNumeroCelularField,
            correo: textCorreoField,
            fechaNacimiento: dateFechaNacimientoField,
            
            acompañante: {
                nombre: textNombresAcompañanteField,
                apellidos: textApellidosAcompañanteField,
                direccion: textDireccionAcompañanteField,
                celular: textNumeroCelularAcompañanteField,
                correo: textCorreoAcompañante,
                fechaNacimiento: dateFechaNacimientoAcompañanteField
            }

        }

    // Almacenamiento en el localStorage
        localStorage.setItem(`RegistroClienteSecretaria - ${textNumeroIdField}`, JSON.stringify(requestObject))

    alert("Historial clinico enviado")

}