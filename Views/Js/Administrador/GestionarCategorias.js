// @ts-nocheck

let tr_id = 0;

const agregarCategorias=()=>{

    let codigoCategoria = document.getElementById("codigoCategoria").value
    let nombreCategoria = document.getElementById("nombreCategoria").value
    let trid = tr_id

    let tbody = document.getElementById("categoriasTabla")
    let tr = document.createElement("tr")
    tr.id="trid"+tr_id

    let th = document.createElement('th');
    th.scope = "row"
    th.innerHTML = codigoCategoria

    let td_1 = document.createElement("td")
    td_1.innerHTML = nombreCategoria

    let td_3 = document.createElement("td")
    
    let buttonEliminar = document.createElement("button")
    buttonEliminar.innerHTML="Eliminar"
    buttonEliminar.addEventListener( 'click' ,() => eliminarDocumento(trid) )
    let buttonActualizar = document.createElement("button")
    buttonActualizar.addEventListener( 'click' ,() => actualizarDocumento(codigoCategoria,nombreCategoria,trid) )
    buttonActualizar.innerHTML="Actualizar"

    td_3.append(buttonEliminar,buttonActualizar)

    tr.append(th,td_1,td_3)

    tbody.append(tr)

    document.getElementById("codigoCategoria").value = ""
    document.getElementById("nombreCategoria").value = ""

    tr_id++;
    
}

const actualizarDocumento=(codigo,nombre,trid)=>{

    document.getElementById("codigoCategoria").value = codigo
    document.getElementById("nombreCategoria").value = nombre

    console.log("trid"+trid)

    document.getElementById("categoriasTabla").removeChild(document.getElementById('trid'+trid))

}

const eliminarDocumento=(trid)=>{
    document.getElementById("categoriasTabla").removeChild(document.getElementById('trid'+trid))
}