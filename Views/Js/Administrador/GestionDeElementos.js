// @ts-nocheck

let tr_id = 0;

const agregarElementos=()=>{

    let codigoElemento = document.getElementById("codigoElemento").value
    let nombreElemento = document.getElementById("nombreElemento").value
    let costoElemento = document.getElementById("costoElemento").value
    let trid = tr_id

    let tbody = document.getElementById("elementosTabla")
    let tr = document.createElement("tr")
    tr.id="trid"+tr_id

    let th = document.createElement('th');
    th.scope = "row"
    th.innerHTML = codigoElemento

    let td_1 = document.createElement("td")
    td_1.innerHTML = nombreElemento

    let td_2 = document.createElement("td")
    td_2.innerHTML = costoElemento

    let td_3 = document.createElement("td")
    
    let buttonEliminar = document.createElement("button")
    buttonEliminar.innerHTML="Eliminar"
    buttonEliminar.addEventListener( 'click' ,() => eliminarDocumento(trid) )
    let buttonActualizar = document.createElement("button")
    buttonActualizar.innerHTML="Actualizar"
    buttonActualizar.addEventListener( 'click' ,() => actualizarDocumento(codigoElemento,nombreElemento,costoElemento,trid) )

    td_3.append(buttonEliminar,buttonActualizar)

    tr.append(th,td_1,td_2,td_3)

    tbody.append(tr)

    document.getElementById("codigoElemento").value = ""
    document.getElementById("nombreElemento").value = ""
    document.getElementById("costoElemento").value = ""

    tr_id++;
    
}

const actualizarDocumento=(codigo,nombre,costo,trid)=>{

    document.getElementById("codigoElemento").value = codigo
    document.getElementById("nombreElemento").value = nombre
    document.getElementById("costoElemento").value = costo

    console.log("trid"+trid)

    document.getElementById("elementosTabla").removeChild(document.getElementById('trid'+trid))

}

const eliminarDocumento=(trid)=>{
    document.getElementById("elementosTabla").removeChild(document.getElementById('trid'+trid))
}