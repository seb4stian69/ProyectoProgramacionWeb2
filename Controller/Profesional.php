<?php

include_once '../Common/DatabaseController.php';

include_once '../Models/Diagnostico.php';
include_once '../Models/Tratamiento.php';

class ControllerProfesional extends Database{

    public function diagnostico($diagnostico){
        return $this -> executeStatement(
            "call profesional_diagnostico(?,?,?,?,?,?,?,?,?,?,?,?)",
            [[
                $diagnostico -> getIdentificador(),
                $diagnostico -> getNumerosesionesrecomendadas(),
                $diagnostico -> getCodigoServicio(),
                $diagnostico -> getPresionsistolica(),
                $diagnostico -> getPresiondiastolica(),
                $diagnostico -> getPeso(),
                $diagnostico -> getDiagnostico(),
                $diagnostico -> getDerivacion(),
                $diagnostico -> getClientesTipoindentificacion(),
                $diagnostico -> getClientesNumeroidentificacion(),
                $diagnostico -> getProfesionalTipoindentificacion(),
                $diagnostico -> getProfesionalNumeroidentificacion()
            ]]
        );
    }

    public function tratamiento($tratamiento){
        return $this -> executeStatement(
            "call profesional_tratamiento(?,?,?,?,?,?,?)",
            [[
                $tratamiento->getIdentificador(),
                $tratamiento->getNumerosesion(),
                $tratamiento->getPeso(),
                $tratamiento->getEvolucion(),
                $tratamiento->getPresionsiestolica(),
                $tratamiento->getPresiondiastolica(),
                $tratamiento->getDiagnosticoIdentificador()
            ]]
        )
    }

}

?>