// @ts-nocheck

/* Html table data creation */
let clientesEncontrandos = [
    {
        id:1,
        nombres: "Manuel",
        apellidos: "Salcedo",
        numeroCelular: 2312313,
        correo: "manuel@gmail.com",
        fecha: "26-07-2022",
        hora:"12:00"
    },
    {
        id:1,
        nombres: "Manuel",
        apellidos: "Salcedo",
        numeroCelular: 2312313,
        correo: "manuel@gmail.com",
        fecha: "26-07-2022",
        hora:"12:00"
    },
    {
        id:2,
        nombres: "Julian",
        apellidos: "Salas",
        numeroCelular: 32323,
        correo: "julian@gmail.com",
        fecha: "26-07-2022",
        hora:"12:00"
    },
    {
        id:3,
        nombres: "Manuela",
        apellidos: "Perez",
        numeroCelular: 43213,
        correo: "manuela@gmail.com",
        fecha: "26-07-2022",
        hora:"12:00"
    },
    {
        id:4,
        nombres: "Liz",
        apellidos: "Monterroza",
        numeroCelular: 231313,
        correo: "liz@gmail.com",
        fecha: "26-07-2022",
        hora:"12:00"
    },
    {
        id:4,
        nombres: "Liz",
        apellidos: "Monterroza",
        numeroCelular: 231313,
        correo: "liz@gmail.com",
        fecha: "26-07-2022",
        hora:"12:00"
    },
    {
        id:4,
        nombres: "Liz",
        apellidos: "Monterroza",
        numeroCelular: 231313,
        correo: "liz@gmail.com",
        fecha: "26-07-2022",
        hora:"12:00"
    },
    {
        id:5,
        nombres: "Maria",
        apellidos: "Castro",
        numeroCelular: 43434,
        correo: "maria@gmail.com",
        fecha: "26-07-2022",
        hora:"12:00"
    },
    {
        id:6,
        nombres: "Cristian",
        apellidos: "Gomez",
        numeroCelular: 75463,
        correo: "cristian@gmail.com",
        fecha: "26-07-2022",
        hora:"12:00"
    }

]

const tbodyTablaClientes = document.getElementById('tbodyClientes');

clientesEncontrandos.forEach( data => {

    let tr = document.createElement('tr');
    tr.id = "trClient"

    let th = document.createElement('th');
    th.scope = "row";
    th.innerHTML = data.id;

    let td_nombre = document.createElement('td');
    td_nombre.innerHTML = data.nombres;

    let td_apellido = document.createElement('td');
    td_apellido.innerHTML = data.apellidos;

    let td_numCelular = document.createElement('td');
    td_numCelular.innerHTML = data.numeroCelular;

    let td_correo = document.createElement('td');
    td_correo.innerHTML = data.correo;

    let td_fecha = document.createElement('td');
    td_fecha.innerHTML = data.fecha;

    let td_hora = document.createElement('td');
    td_hora.innerHTML = data.hora;

    tr.append(th,td_nombre,td_apellido,td_numCelular,td_correo,td_fecha,td_hora);

    tbodyTablaClientes.append(tr);

});

/* Añadiendo funcionalidad de busqueda de cliente */
let filtro;
let numFiltros = 0;
const listenerCambios = () =>{ filtro = document.getElementById('buscadorPorId').value }

let tablaClientes = document.getElementById('tablaClientes');
let tbodyFilter = document.createElement("tbody");
tbodyFilter.id="tbodyClientes"

const filtrarClientes = () =>{

    let newFilterData = clientesEncontrandos.filter(cliente => cliente.id == filtro);

    if(newFilterData.length == 0){
        document.getElementById('buscadorPorId').value = "";
        alert("No hay clientes con ese en el listado");
    }else{

        document.getElementById('tbodyClientes').parentNode.removeChild(document.getElementById('tbodyClientes'))

        newFilterData.forEach( data => {

            let tr = document.createElement('tr');
    
            let th = document.createElement('th');
            th.scope = "row";
            th.innerHTML = data.id;
        
            let td_nombre = document.createElement('td');
            td_nombre.innerHTML = data.nombres;
        
            let td_apellido = document.createElement('td');
            td_apellido.innerHTML = data.apellidos;
        
            let td_numCelular = document.createElement('td');
            td_numCelular.innerHTML = data.numeroCelular;
        
            let td_correo = document.createElement('td');
            td_correo.innerHTML = data.correo;
        
            let td_fecha = document.createElement('td');
            td_fecha.innerHTML = data.fecha;
        
            let td_hora = document.createElement('td');
            td_hora.innerHTML = data.hora;
                
            tr.append(th,td_nombre,td_apellido,td_numCelular,td_correo,td_fecha,td_hora);
        
            tbodyFilter.append(tr);
    
            console.log("cambio")
    
        })
    
        tablaClientes.append(tbodyFilter);

    }

}