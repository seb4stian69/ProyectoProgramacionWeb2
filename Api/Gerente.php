<?php

include_once '../Controller/Gerente.php';

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

$controller = new ControllerGerente();
$okStatus = "HTTP/1.1 200 OK";
$type = $_GET['type'];

if ($_SERVER['REQUEST_METHOD'] === 'GET'){
    
    if($type=="reportone"){
        $cat = $_GET['cat'];
        echo json_encode($controller -> reportOne($cat));
    }
    
    if($type=="reporttwo"){
        echo json_encode($controller -> reportTwo());
    }
    
    if($type=="reportthree"){
        echo json_encode($controller -> reportThree());
    }
    
}

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $codigo = $_POST['codigo'];
    $controller -> eliminacionAprobacionServicio($codigo);
}

?>