<?php

    class ConexionBaseDatos {

        private $connection;

        public function __construct(){
            $this->connection = mysqli_connect("127.0.0.1", "root", "root", "AcmeClinica", 3306);
        }
    
        public function crearConexion(){
            return $this->connection;
        }
    
        public function cerrarConexion(){
            $this->connection->close();
        }

    }

?>