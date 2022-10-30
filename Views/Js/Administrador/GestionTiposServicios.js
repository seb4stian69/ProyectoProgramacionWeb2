// @ts-nocheck

let tr_id = 0;

const agregarTipoServicios=()=>{

    let codigoTipoServicio = document.getElementById("codigoTipoServicio").value
    let nombreTipoServicio = document.getElementById("nombreTipoServicio").value
    let costoTipoServicio = document.getElementById("descripcionTipoServicio").value
    let trid = tr_id

    let tbody = document.getElementById("tipoServiciosTabla")
    let tr = document.createElement("tr")
    tr.id="trid"+tr_id

    let th = document.createElement('th');
    th.scope = "row"
    th.innerHTML = codigoTipoServicio

    let td_1 = document.createElement("td")
    td_1.innerHTML = nombreTipoServicio

    let td_2 = document.createElement("td")
    td_2.innerHTML = costoTipoServicio

    let td_3 = document.createElement("td")
    
    let buttonEliminar = document.createElement("button")
    buttonEliminar.innerHTML="Eliminar"
    buttonEliminar.addEventListener( 'click' ,() => eliminarDocumento(trid) )
    let buttonActualizar = document.createElement("button")
    buttonActualizar.innerHTML="Actualizar"
    buttonActualizar.addEventListener( 'click' ,() => actualizarDocumento(codigoTipoServicio,nombreTipoServicio,costoTipoServicio,trid) )

    td_3.append(buttonEliminar,buttonActualizar)

    tr.append(th,td_1,td_2,td_3)

    tbody.append(tr)

    document.getElementById("codigoTipoServicio").value = ""
    document.getElementById("nombreTipoServicio").value = ""
    document.getElementById("descripcionTipoServicio").value = ""

    tr_id++;
    
}

const actualizarDocumento=(codigo,nombre,costo,trid)=>{

    document.getElementById("codigoTipoServicio").value = codigo
    document.getElementById("nombreTipoServicio").value = nombre
    document.getElementById("descripcionTipoServicio").value = costo

    console.log("trid"+trid)

    document.getElementById("tipoServiciosTabla").removeChild(document.getElementById('trid'+trid))

}

const eliminarDocumento=(trid)=>{
    document.getElementById("tipoServiciosTabla").removeChild(document.getElementById('trid'+trid))
}