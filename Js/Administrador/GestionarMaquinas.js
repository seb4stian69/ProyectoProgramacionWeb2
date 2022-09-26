// @ts-nocheck

let tr_id = 0;

const agregarMaquinas=()=>{

    let codigoMaquina = document.getElementById("codigoMaquina").value
    let nombreMaquina = document.getElementById("nombreMaquina").value
    let costoMaquina = document.getElementById("costoMaquina").value
    let trid = tr_id

    let tbody = document.getElementById("maquinasTabla")
    let tr = document.createElement("tr")
    tr.id="trid"+tr_id

    let th = document.createElement('th');
    th.scope = "row"
    th.innerHTML = codigoMaquina

    let td_1 = document.createElement("td")
    td_1.innerHTML = nombreMaquina

    let td_2 = document.createElement("td")
    td_2.innerHTML = costoMaquina

    let td_3 = document.createElement("td")
    
    let buttonEliminar = document.createElement("button")
    buttonEliminar.innerHTML="Eliminar"
    buttonEliminar.addEventListener( 'click' ,() => eliminarDocumento(trid) )
    let buttonActualizar = document.createElement("button")
    buttonActualizar.innerHTML="Actualizar"
    buttonActualizar.addEventListener( 'click' ,() => actualizarDocumento(codigoMaquina,nombreMaquina,costoMaquina,trid) )

    td_3.append(buttonEliminar,buttonActualizar)

    tr.append(th,td_1,td_2,td_3)

    tbody.append(tr)

    document.getElementById("codigoMaquina").value = ""
    document.getElementById("nombreMaquina").value = ""
    document.getElementById("costoMaquina").value = ""

    tr_id++;
    
}

const actualizarDocumento=(codigo,nombre,costo,trid)=>{

    document.getElementById("codigoMaquina").value = codigo
    document.getElementById("nombreMaquina").value = nombre
    document.getElementById("costoMaquina").value = costo

    console.log("trid"+trid)

    document.getElementById("maquinasTabla").removeChild(document.getElementById('trid'+trid))

}

const eliminarDocumento=(trid)=>{
    document.getElementById("maquinasTabla").removeChild(document.getElementById('trid'+trid))
}