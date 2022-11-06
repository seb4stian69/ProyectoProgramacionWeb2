<?php

    class ConexionBaseDatos {

        private $connection;

        public function __construct(){
            require("../settings/configuraciones.php");
            $this->conexion = mysqli_connect($servidor, $usuario, 
            $contraseña,$baseDatos,$puerto);
    
        }
    
        public function crearConexion(){
            return $this->connection;
        }
    
        public function cerrarConexion(){
            $this->connection->close();
        }

    }

?>