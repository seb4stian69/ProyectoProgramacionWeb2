// @ts-nocheck

const dataUser = [
    {
        numeroId:1,
        numSesion:1,
        nombre:"Manuel",
        apellidos:"Salcedo",
        peso:22,
        derivacion:"DatoDerivacion",
        diagnostico:"DatoDiagnostico",
        resultados:"Resultados",
        presionaArterial:"PresionaArterial",
        tipoServicio:"tipoServicio",
        descripcion:"descripcion"
    },
    {
        numeroId:1,
        numSesion:2,
        nombre:"Sebas",
        apellidos:"Santis",
        peso:32,
        derivacion:"DatoDerivacion",
        diagnostico:"DatoDiagnostico",
        resultados:"Resultados",
        presionaArterial:"Presio",
        tipoServicio:"tipo",
        descripcion:"des"
    },
    {
        numeroId:2,
        numSesion:1,
        nombre:"Julian",
        apellidos:"Ruiz",
        peso:43,
        derivacion:"DatoDerivacion",
        diagnostico:"DatoDiagnostico",
        resultados:"Resultados",
        presionaArterial:"Presio",
        tipoServicio:"tipo",
        descripcion:"des"
    },
    {
        numeroId:3,
        numSesion:1,
        nombre:"Luis",
        apellidos:"Oviedo",
        peso:12,
        derivacion:"DatoDerivacion",
        diagnostico:"DatoDiagnostico",
        resultados:"Resultados",
        presionaArterial:"Presio",
        tipoServicio:"tipo",
        descripcion:"des"
    }
]

const busqueda=()=>{

    let idCliente = document.getElementById("idCliente").value
    let numSesiond = document.getElementById("numSesion").value

    let dataFind = dataUser.filter( data => data.numeroId == idCliente && data.numSesion == numSesiond)

    document.getElementById("numeroId").value = dataFind[0].numeroId
    document.getElementById("numSesions").value = dataFind[0].numSesion
    document.getElementById("nombre").value = dataFind[0].nombre
    document.getElementById("apellidos").value = dataFind[0].apellidos
    document.getElementById("peso").value = dataFind[0].peso
    document.getElementById("derivacion").value = dataFind[0].derivacion
    document.getElementById("diagnostico").value = dataFind[0].diagnostico
    document.getElementById("resultados").value = dataFind[0].resultados
    document.getElementById("presionaArterial").value = dataFind[0].presionaArterial
    document.getElementById("tipoServicio").value = dataFind[0].tipoServicio
    document.getElementById("descripcion").value = dataFind[0].descripcion    



}