<?php

include_once '../Controller/Administrador.php';

include_once '../Models/Categoria.php';
include_once '../Models/ReglasDevolucion.php';
include_once '../Models/MateriaPrima.php';
include_once '../Models/Servicio.php';
include_once '../Models/Profesional.php';
include_once '../Models/Estudios.php';
include_once '../Models/ExperienciaLaboral.php';

header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header('Access-Control-Allow-Origin: "*"');
header('Access-Control-Allow-Origin: http://127.0.0.1:5500');
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Credentials: true');
header("Access-Control-Allow-Headers: X-Requested-With");
header('Content-Type: text/html; charset=utf-8');
header('P3P: CP="IDC DSP COR CURa ADMa OUR IND PHY ONL COM STA"');
$method = $_SERVER['REQUEST_METHOD'];
if($method == "OPTIONS"){die();}

$controller = new ControllerAdministrador();
$okStatus = "HTTP/1.1 200 OK";

$type = $_GET['type'];

/* + ----------------------------- Control de rutas ----------------------------- */

if ($_SERVER['REQUEST_METHOD'] === 'POST'){

    if($type=="gestionCategorias_create"){

        $Identificador = $_POST['Identificador'];
        $Nombre = $_POST['Nombre'];
        $Descripcion = $_POST['Descripcion'];

        $categoria = new Categoria($Identificador, $Nombre, $Descripcion, null);

        $controller -> gestionCategorias_create($categoria);

    }

    if($type=="gestionEstadosEvolucion_create"){

        $Identificador = $_POST['Identificador'];
        $Presiondiastolica = $_POST['Presiondiastolica'];
        $Presionisotolica = $_POST['Presionisotolica'];
        $Peso = $_POST['Peso'];
        $Evolucion = $_POST['Evolucion'];
        $ServicioCodigo = $_POST['ServicioCodigo'];

        $reglaEvolucion = new ReglaDevolucion($Identificador, $Presiondiastolica, $Presionisotolica, $Peso, $Evolucion, $ServicioCodigo);

        $controller -> gestionEstadosEvolucion_create($reglaEvolucion);

    }

    if($type=="gestionMateriaPrima_create"){

        $Nombre = $_POST['Nombre'];
        $Descripcion = $_POST['Descripcion'];
        $Costo = $_POST['Costo'];

        $materiaPrima = new MateriaPrima(0, $Nombre, $Descripcion, $Costo, null);

        $controller -> gestionMateriaPrima_create($materiaPrima);

    }

    if($type=="gestionServicios_create"){

        $Codigo = $_POST['Codigo'];
        $IdentificadorCategoria = $_POST['IdentificadorCategoria'];
        $Nombre = $_POST['Nombre'];
        $Descripcion = $_POST['Descripcion'];
        $Porcentajeganancia = $_POST['Porcentajeganancia'];

        $servicio = new Servicio($Codigo, $IdentificadorCategoria, $Nombre, $Descripcion, $Porcentajeganancia, null, null);

        $controller -> gestionServicios_create($servicio);
    }

    if($type=="gestionProfesional_create"){

        $Tipoindentificacion = $_POST['Tipoindentificacion'];
        $Numeroidentificacion = $_POST['Numeroidentificacion'];
        $Nombres = $_POST['Nombres'];
        $Apellidos = $_POST['Apellidos'];
        $Correoelectronico = $_POST['Correoelectronico'];
        $Numerotelefono = $_POST['Numerotelefono'];
        $Direccionresidencia = $_POST['Direccionresidencia'];

        $profesional = new Profesional($Tipoindentificacion, $Numeroidentificacion, $Nombres, $Apellidos, $Correoelectronico, $Numerotelefono, $Direccionresidencia);

        $controller -> gestionProfesional_create($profesional);

    }

    if($type=="gestionProfesional_addEstudio"){

        $Identificador=$_POST['Identificador'];
        $TipoindentificacionProfesional=$_POST['TipoindentificacionProfesional'];
        $NumeroidentificacionProfesional=$_POST['NumeroidentificacionProfesional'];
        $Institucion=$_POST['Institucion'];
        $Tipoestudio=$_POST['Tipoestudio'];
        $Nombre=$_POST['Nombre'];
        $Fechainicio=$_POST['Fechainicio'];
        $Fechafinal=$_POST['Fechafinal'];

        $estudios = new Estudios($Identificador, $TipoindentificacionProfesional, $NumeroidentificacionProfesional, $Institucion, $Tipoestudio, $Nombre, $Fechainicio, $Fechafinal);

        $controller -> gestionProfesional_addEstudio($estudios);
    }

    if($type=="gestionProfesional_addExperiencia"){

        $Identificador = $_POST['Identificador'];
        $TipoindentificacionProfesional = $_POST['TipoindentificacionProfesional'];
        $NumeroidentificacionProfesional = $_POST['NumeroidentificacionProfesional'];
        $Nombremepresa = $_POST['Nombremepresa'];
        $Cargo = $_POST['Cargo'];
        $FechaInicio = $_POST['FechaInicio'];
        $Fechafinal = $_POST['Fechafinal'];

        $explaboral = new ExperienciaLaboral($Identificador, $TipoindentificacionProfesional, $NumeroidentificacionProfesional, $Nombremepresa, $Cargo, $FechaInicio, $Fechafinal);

        $controller -> gestionProfesional_addExperiencia($explaboral);
    }

}

if ($_SERVER['REQUEST_METHOD'] === 'GET'){

    if($type=="gestionCategorias_select"){echo json_encode($controller->gestionCategorias_select());}
    if($type=="gestionEstadosEvolucion_select"){echo json_encode($controller->gestionEstadosEvolucion_select());}
    if($type=="gestionMateriaPrima_select"){echo json_encode($controller->gestionMateriaPrima_select());}
    if($type=="gestionServicios_select"){echo json_encode($controller->gestionServicios_select());}
    if($type=="gestionProfesional_select"){echo json_encode($controller->gestionProfesional_select());}
    
}

if ($_SERVER['REQUEST_METHOD'] === 'PUT'){

    if($type=="gestionCategorias_update"){

        $Identificador = $_GET['Identificador'];
        $Nombre = $_GET['Nombre'];
        $Descripcion = $_GET['Descripcion'];

        $categoria = new Categoria($Identificador, $Nombre, $Descripcion, null);

        $controller -> gestionCategorias_update($categoria);

    }

    if($type=="gestionEstadosEvolucion_update"){

        $Identificador = $_GET['Identificador'];
        $Presiondiastolica = $_GET['Presiondiastolica'];
        $Presionisotolica = $_GET['Presionisotolica'];
        $Peso = $_GET['Peso'];
        $Evolucion = $_GET['Evolucion'];
        $ServicioCodigo = $_GET['ServicioCodigo'];

        $reglaEvolucion = new ReglaDevolucion($Identificador, $Presiondiastolica, $Presionisotolica, $Peso, $Evolucion, $ServicioCodigo);

        $controller -> gestionEstadosEvolucion_update($reglaEvolucion);

    }

    if($type=="gestionMateriaPrima_update"){

        $Nombre = $_GET['Nombre'];
        $Descripcion = $_GET['Descripcion'];
        $Costo = $_GET['Costo'];

        $materiaPrima = new MateriaPrima(0, $Nombre, $Descripcion, $Costo, null);

        $controller -> gestionMateriaPrima_update($materiaPrima);
    }

    if($type=="gestionServicios_update"){

        $Codigo = $_GET['Codigo'];
        $IdentificadorCategoria = $_GET['IdentificadorCategoria'];
        $Nombre = $_GET['Nombre'];
        $Descripcion = $_GET['Descripcion'];
        $Porcentajeganancia = $_GET['Porcentajeganancia'];

        $servicio = new Servicio($Codigo, $IdentificadorCategoria, $Nombre, $Descripcion, $Porcentajeganancia, null, null);



        $controller -> gestionServicios_update();
    }

    if($type=="gestionProfesional_update"){
        
        $Tipoindentificacion = $_GET['Tipoindentificacion'];
        $Numeroidentificacion = $_GET['Numeroidentificacion'];
        $Nombres = $_GET['Nombres'];
        $Apellidos = $_GET['Apellidos'];
        $Correoelectronico = $_GET['Correoelectronico'];
        $Numerotelefono = $_GET['Numerotelefono'];
        $Direccionresidencia = $_GET['Direccionresidencia'];

        $profesional = new Profesional($Tipoindentificacion, $Numeroidentificacion, $Nombres, $Apellidos, $Correoelectronico, $Numerotelefono, $Direccionresidencia);


        $controller -> gestionProfesional_update($profesional);
    }

}

if ($_SERVER['REQUEST_METHOD'] === 'DELETE'){

    if($type=="gestionCategorias_delete"){
        $Identificador = $_GET['Identificador'];
        $controller -> gestionCategorias_delete($Identificador);
    }

    if($type=="gestionEstadosEvolucion_delete"){
        $Identificador = $_GET['Identificador'];
        $controller -> gestionEstadosEvolucion_delete($Identificador);
    }

    if($type=="gestionMateriaPrima_delete"){
        $Identificador = $_GET['Identificador'];
        $controller -> gestionMateriaPrima_delete($Identificador);
    }

    if($type=="gestionServicios_delete"){
        $Identificador = $_GET['Identificador'];
        $controller -> gestionServicios_delete($Identificador);
    }

    if($type=="gestionProfesional_delete"){
        $Identificador = $_GET['Identificador'];
        $controller -> gestionProfesional_delete($Identificador);
    }

}

?>