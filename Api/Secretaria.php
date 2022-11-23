<?php

include_once '../Controller/Secretaria.php';
include_once '../Models/Clientes.php';

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

$controller = new ControladorSecretaria();
$okStatus = "HTTP/1.1 200 OK";
$type = $_GET['type'];

if ($_SERVER['REQUEST_METHOD'] === 'POST'){

    $Tipoindentificacion = $_POST['Tipoindentificacion'];
    $Numeroidentificacion = $_POST['Numeroidentificacion'];
    $Nombres = $_POST['Nombres'];
    $Apellidos = $_POST['Apellidos'];
    $Fechanacimiento = $_POST['Fechanacimiento'];
    $Correoelectronico = $_POST['Correoelectronico'];
    $Numerotelefono = $_POST['Numerotelefono'];
    $DireccionResidencia = $_POST['DireccionResidencia'];
    $Nombrescompanante = $_POST['Nombrescompanante'];
    $Apellidosacompanante = $_POST['Apellidosacompanante'];
    $Fechanacimientoacompanante = $_POST['Fechanacimientoacompanante'];
    $Correoelectronicoacompanante = $_POST['Correoelectronicoacompanante'];

    $cliente = new Clientes($Tipoindentificacion, $Numeroidentificacion, $Nombres, $Apellidos, $Fechanacimiento, $Correoelectronico, $Numerotelefono, $DireccionResidencia, $Nombrescompanante, $Apellidosacompanante, $Fechanacimientoacompanante, $Correoelectronicoacompanante);

    $controller -> registroPacientes($cliente);

}

if ($_SERVER['REQUEST_METHOD'] === 'GET'){

    if($type=="recordatorioCitas"){
        $id = $_GET['id'];
        echo json_encode($controller->recordatorioCitas($id));
    }

    if($type=="facturacion"){
        $tipoid = $_GET['tipoid'];
        $id = $_GET['id'];
        echo json_encode($controller->facturacion($tipoid,$id));
    }

}

?>