// @ts-nocheck

let tr_id = 0

const guardarDocumento=()=>{

    let categoriasText = document.getElementById("categoriasText").value
    let tiposText = document.getElementById("tiposText").value
    let descripcionText = document.getElementById("descripcionText").value
    
    let elementosText = document.getElementById("elementosText").value
    
    let maquinasText = document.getElementById("maquinasText").value
    let trid = tr_id
    
    let costoElementoText = parseFloat(document.getElementById("costoElementoText").value)
    let costoMaquinaText = parseFloat(document.getElementById("costoMaquinaText").value)
    let porcentajeGanancia = parseFloat(document.getElementById("porcentajeGanancia").value)

    let ptotal = ((costoElementoText+costoMaquinaText)*(porcentajeGanancia/100))+(costoElementoText+costoMaquinaText)
    let ctotal = costoElementoText+costoMaquinaText
        
    /*Tabla*/
    let tbody = document.getElementById("serviciosCreados")
    let tr = document.createElement("tr")
    tr.id = "trid"+tr_id

    let td_1 = document.createElement('td')
    td_1.innerHTML = categoriasText

    let td_2 = document.createElement('td')
    td_2.innerHTML = tiposText

    let td_3 = document.createElement('td')
    td_3.innerHTML = descripcionText

    let td_4 = document.createElement('td')
    td_4.innerHTML=elementosText

    let td_5 = document.createElement('td')
    td_5.innerHTML = costoMaquinaText

    let td_6 = document.createElement('td')
    td_6.innerHTML = ctotal

    let td_7 = document.createElement('td')
    td_7.innerHTML = porcentajeGanancia

    let td_8 = document.createElement('td')
    td_8.innerHTML = ptotal

    let td_9 = document.createElement('td')
    let buttonActualizar = document.createElement('button')
    buttonActualizar.innerHTML = 'Actualizar'
    buttonActualizar.addEventListener('click',()=>
        actualizarDocumento(categoriasText,tiposText,descripcionText,elementosText,maquinasText,costoElementoText,costoMaquinaText,porcentajeGanancia,trid)
    )

    let buttonEliminar = document.createElement('button')
    buttonEliminar.innerHTML = 'Eliminar'
    buttonEliminar.addEventListener( 'click' ,()=> eliminarDocumento(trid))

    td_9.append(buttonActualizar,buttonEliminar)

    tr.append(td_1,td_2,td_3,td_4,td_5,td_6,td_7,td_8,td_9)
    tbody.append(tr)

    tr_id++;

    document.getElementById("categoriasText").value = ""
    document.getElementById("tiposText").value = ""
    document.getElementById("descripcionText").value = ""
    document.getElementById("elementosText").value = ""
    document.getElementById("maquinasText").value = ""
    document.getElementById("costoElementoText").value = ""
    document.getElementById("costoMaquinaText").value = ""
    document.getElementById("porcentajeGanancia").value = ""
    document.getElementById("precioTotal").value = ""
    document.getElementById("costoTotalText").value = ""

}

const onCostChange = () =>{

    let costoElementoText = parseFloat(document.getElementById("costoElementoText").value)
    let costoMaquinaText = parseFloat(document.getElementById("costoMaquinaText").value)
    let porcentajeGanancia = parseFloat(document.getElementById("porcentajeGanancia").value)

    let ptotal = ((costoElementoText+costoMaquinaText)*(porcentajeGanancia/100))+(costoElementoText+costoMaquinaText)
    let ctotal = costoElementoText+costoMaquinaText

    document.getElementById("precioTotal").value = ptotal
    document.getElementById("costoTotalText").value = ctotal

}

const actualizarDocumento=(categoriasText,tiposText,descripcionText,elementosText,maquinasText,costoElementoText,costoMaquinaText,porcentajeGanancia,trid)=>{

    document.getElementById("categoriasText").value = categoriasText
    document.getElementById("tiposText").value = tiposText
    document.getElementById("descripcionText").value = descripcionText
    document.getElementById("elementosText").value = elementosText
    document.getElementById("maquinasText").value = maquinasText
    document.getElementById("costoElementoText").value = costoElementoText
    document.getElementById("costoMaquinaText").value = costoMaquinaText
    document.getElementById("porcentajeGanancia").value = porcentajeGanancia

    onCostChange()

    document.getElementById("serviciosCreados").removeChild(document.getElementById('trid'+trid))

}

const eliminarDocumento=(trid)=>{
    document.getElementById("serviciosCreados").removeChild(document.getElementById('trid'+trid))
}