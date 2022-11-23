<?php

include_once '../Common/DatabaseController.php';

class Sesion extends Database{

    public function validarSesion($usuario, $contrasena){
        return $this->select(
            "call global_acceso(?,?);",
            [[
                $usuario,
                $contrasena
            ]]
        );
    }

    public function agregarAcceso($nombreUsuario, $contrasena, $tipo){
        $this -> executeStatement(
            "call proyectofinalintegrador.global_AddAcceso(?,?,?)",
            [[
                $nombreUsuario,
                $contrasena,
                $tipo
            ]]
        );
    }


}

?>