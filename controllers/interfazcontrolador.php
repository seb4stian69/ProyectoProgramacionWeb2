<?php 

    interface InterfazControlador {

        public function guardar($objeto);
        public function eliminar($objeto);
        public function consultarRegistro($objeto);
        public function listar();
    }

?>