<?php

include_once '../Common/DatabaseController.php';

class ControllerCliente extends Database{
 
    public function agendarCita($tipoId, $numeroId, $fechaHora){
        return $this -> executeStatement(
            "call clientes_agendamientoCitas(?,?,?)",
            [[$tipoId, $numeroId, $fechaHora]]
        );
    }

    public function historiaClinica($numeroId){
        return $this -> select(
            "call clientes_consultaHistorialClinico(?)",
            [[$numeroId]]
        );
    }
    
}

?>