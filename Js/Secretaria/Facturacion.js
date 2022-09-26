// @ts-nocheck

/* Html inputs data creation */
// Select field
let arrayTipoId = ['CC','TI','CE'];
let selectTipoIdField = document.getElementById('selectTipoIdField');

let clientesEncontrandos = [
    {
        id:1,
        tipoIdValue: "CC",
        nombres: "Manuel",
        direccion: "calle 14B #10 a 23",
        apellidos: "Salcedo",
        numeroCelular: 2312313,
        correo: "manuel@gmail.com",
        fecha: "26-07-2022",
        hora:"12:00",
        dataServicio:{
            codServicio: 1,
            nombreServicio:"Rayos x",
            descripcion: "Se hizo rayos x",
            precio: 20000
        }
    },
    {
        id:2,
        tipoIdValue: "CC",
        nombres: "Julian",
        direccion: "calle 14B #10 a 23",
        apellidos: "Salas",
        numeroCelular: 32323,
        correo: "julian@gmail.com",
        fecha: "26-07-2022",
        hora:"12:00",
        dataServicio:{
            codServicio: 2,
            nombreServicio:"Masaje muscular",
            descripcion: "Se hizo masaje",
            precio: 30000
        }
    },
    {
        id:3,
        tipoIdValue: "CC",
        nombres: "Manuela",
        direccion: "calle 14B #10 a 23",
        apellidos: "Perez",
        numeroCelular: 43213,
        correo: "manuela@gmail.com",
        fecha: "26-07-2022",
        hora:"12:00",
        dataServicio:{
            codServicio: 3,
            nombreServicio:"Vision",
            descripcion: "descripcion",
            precio: 40000
        }
    },
    {
        id:4,
        tipoIdValue: "CC",
        nombres: "Liz",
        direccion: "calle 14B #10 a 23",
        apellidos: "Monterroza",
        numeroCelular: 231313,
        correo: "liz@gmail.com",
        fecha: "26-07-2022",
        hora:"12:00",
        dataServicio:{
            codServicio: 4,
            nombreServicio:"Servicio x",
            descripcion: "Descripcion nueva",
            precio: 50000
        }
    },
    {
        id:5,
        tipoIdValue: "CC",
        nombres: "Maria",
        direccion: "calle 14B #10 a 23",
        apellidos: "Castro",
        numeroCelular: 43434,
        correo: "maria@gmail.com",
        fecha: "26-07-2022",
        hora:"12:00",
        dataServicio:{
            codServicio: 5,
            nombreServicio:"Servicio no se que mas",
            descripcion: "Descripcion de nuevo",
            precio: 60000
        }
    },
    {
        id:6,
        tipoIdValue: "CC",
        nombres: "Cristian",
        direccion: "calle 14B #10 a 23",
        apellidos: "Gomez",
        numeroCelular: 75463,
        correo: "cristian@gmail.com",
        fecha: "26-07-2022",
        hora:"12:00",
        dataServicio:{
            codServicio: 6,
            nombreServicio:"Otro intento no se",
            descripcion: "Ultimo servicio quemado",
            precio: 70000
        }
    }

]


arrayTipoId.forEach( data => {

    let option = document.createElement('option');
    option.id=`${data}`
    option.innerHTML = data;

    selectTipoIdField?.append(option);

});

/* Funcionalidad data de tipo id cambiado */
let tipoIdSelected = arrayTipoId[0];
const cambiarTipoId = () =>{ tipoIdSelected = document.getElementById("selectTipoIdField")?.value; }

/* Funcionalidad generar factura */
const generarFacturacion = () => {

    const id = document.getElementById("clienteID")?.value;
    console.log(tipoIdSelected)

    let clienteEncontrado = clientesEncontrandos.filter( data => data.id == id && data.tipoIdValue == tipoIdSelected);

    if(clienteEncontrado.length == 0){
        alert("No se encontro a ningun cliente en el listado de facturacion con ese id");
    }else{
        
        document.getElementById("textNombreCliente").value = clienteEncontrado[0].nombres;
        document.getElementById("textApellidoCliente").value = clienteEncontrado[0].apellidos;
        document.getElementById("textDireccionCliente").value = clienteEncontrado[0].direccion;
        document.getElementById("textNumeroCelularCliente").value = clienteEncontrado[0].numeroCelular;
        document.getElementById("textNumeroCorreoCliente").value = clienteEncontrado[0].correo;

        document.getElementById("codigoServicio").innerHTML = clienteEncontrado[0].dataServicio.codServicio;
        document.getElementById("nombreServicio").innerHTML = clienteEncontrado[0].dataServicio.nombreServicio;
        document.getElementById("descripcion").innerHTML = clienteEncontrado[0].dataServicio.descripcion;
        document.getElementById("precio").innerHTML = clienteEncontrado[0].dataServicio.precio;

    }

}