<?php

include_once '../Controller/Cliente.php';

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

$controller = new ControllerCliente();
$okStatus = "HTTP/1.1 200 OK";


if ($_SERVER['REQUEST_METHOD'] === 'POST'){

    $tipoId = $_POST['tipoId'];
    $numeroId = $_POST['numeroId'];
    $fechaHora = $_POST['fechaHora'];

    $controller->agendarCita($tipoId, $numeroId, $fechaHora);

}

if ($_SERVER['REQUEST_METHOD'] === 'GET'){
    echo json_encode($controller->historiaClinica($_GET['id']));
}

?>