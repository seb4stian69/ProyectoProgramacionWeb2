<?php

include_once '../Controller/Sesion.php';

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

$controller = new Sesion();
$okStatus = "HTTP/1.1 200 OK";
$type = $_GET['type'];

if ($_SERVER['REQUEST_METHOD'] === 'POST'){

    if($type == "acceso"){
        $usuario = $_POST['user'];
        $contrasena = $_POST['password'];
        echo json_encode($controller -> validarSesion($usuario, $contrasena));
    }

    if($type=="addAcceso"){

        $nombreUsuario = $_POST['nombreUsuario'];
        $contrasena = $_POST['contrasena'];
        $tipo = $_POST['tipo'];

        $controller -> agregarAcceso($nombreUsuario, $contrasena, $tipo);

    }

}



?>