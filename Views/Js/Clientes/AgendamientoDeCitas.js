// @ts-nocheck

let tr_id = 0;

const agregarCitas=()=>{

    let fechaCita = document.getElementById("fechaCita").value
    let trid = tr_id

    let tbody = document.getElementById("citasTabla")
    let tr = document.createElement("tr")
    tr.id="trid"+tr_id

    let th = document.createElement('th');
    th.scope = "row"
    th.innerHTML = fechaCita

    let td_3 = document.createElement("td")
    
    let buttonEliminar = document.createElement("button")
    buttonEliminar.innerHTML="Cancelar"
    buttonEliminar.addEventListener( 'click' ,() => eliminarDocumento(trid) )

    let buttonActualizar = document.createElement("button")
    buttonActualizar.innerHTML="Editar"
    buttonActualizar.addEventListener( 'click' ,() => actualizarDocumento(fechaCita,trid));

    td_3.append(buttonEliminar,buttonActualizar)

    tr.append(th,td_3)

    tbody.append(tr)

    document.getElementById("fechaCita").value = ""

    tr_id++;
    
}

const actualizarDocumento=(fecha,trid)=>{

    document.getElementById("fechaCita").value = fecha

    console.log("trid"+trid)

    document.getElementById("citasTabla").removeChild(document.getElementById('trid'+trid))

}

const eliminarDocumento=(trid)=>{
    document.getElementById("citasTabla").removeChild(document.getElementById('trid'+trid))
}