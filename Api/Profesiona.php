<?php

include_once '../Controller/Profesional.php';
include_once '../Models/Diagnostico.php';
include_once '../Models/Tratamiento.php';

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

$controller = new ControllerProfesional();
$okStatus = "HTTP/1.1 200 OK";
$type = $_GET['type'];

if ($_SERVER['REQUEST_METHOD'] === 'POST'){

    if($type=="diagnostico"){
        
        $Identificador = $_POST['Identificador'];
        $Numerosesionesrecomendadas = $_POST['Numerosesionesrecomendadas'];
        $CodigoServicio = $_POST['CodigoServicio'];
        $Presionsistolica = $_POST['Presionsistolica'];
        $Presiondiastolica = $_POST['Presiondiastolica'];
        $Peso = $_POST['Peso'];
        $Diagnostico = $_POST['Diagnostico'];
        $Derivacion = $_POST['Derivacion'];
        $ClientesTipoindentificacion = $_POST['ClientesTipoindentificacion'];
        $ClientesNumeroidentificacion = $_POST['ClientesNumeroidentificacion'];
        $ProfesionalTipoindentificacion = $_POST['ProfesionalTipoindentificacion'];
        $ProfesionalNumeroidentificacion = $_POST['ProfesionalNumeroidentificacion'];

        $diagnostico = new Diagnostico($Identificador, $Numerosesionesrecomendadas, $CodigoServicio, $Presionsistolica, $Presiondiastolica, $Peso, $Diagnostico, $Derivacion, $ClientesTipoindentificacion, $ClientesNumeroidentificacion, $ProfesionalTipoindentificacion, $ProfesionalNumeroidentificacion);

        $controller->diagnostico($diagnostico);

    }

    if($type=="tratamiento"){

        $Identificador = $_POST['Identificador'];
        $Numerosesion = $_POST['Numerosesion'];
        $Peso = $_POST['Peso'];
        $Evolucion = $_POST['Evolucion'];
        $Presionsiestolica = $_POST['Presionsiestolica'];
        $Presiondiastolica = $_POST['Presiondiastolica'];
        $DiagnosticoIdentificador = $_POST['DiagnosticoIdentificador'];

        $tratamiento = new Tratamiento($Identificador, $Numerosesion, $Peso, $Evolucion, $Presionsiestolica, $Presiondiastolica, $DiagnosticoIdentificador);

        $controller -> tratamiento($tratamiento);

    }

}

?>