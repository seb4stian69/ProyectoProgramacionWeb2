<?php 

require("../settings/configuraciones.php");

class ConexionBD {

    private $conexion;

    function __construct() {

        $conexion = new mysqli_connect($servidor, $usuario, 
        $contraseña,$baseDatos,$puerto);
    }

    public getConexion() {

        return $conexion;

    }

    public cerrarConexion() {

        $conexion->close();
    }




}

?>