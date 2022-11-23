<?php

    include_once '../Common/DatabaseController.php';
    include_once '../Models/Clientes.php';

    class ControladorSecretaria extends Database{

        public function registroPacientes($clientes){
            return $this -> executeStatement(
                "call secretaria_registroPaciente(?,?,?,?,?,?,?,?,?,?,?,?)",
                [[
                    $clientes->getTipoindentificacion(),
                    $clientes->getNumeroidentificacion(),
                    $clientes->getNombres(),
                    $clientes->getApellidos(),
                    $clientes->getFechanacimiento(),
                    $clientes->getCorreoelectronico(),
                    $clientes->getNumerotelefono(),
                    $clientes->getDireccionResidencia(),
                    $clientes->getNombrescompanante(),
                    $clientes->getApellidosacompanante(),
                    $clientes->getFechanacimientoacompanante(),
                    $clientes->getCorreoelectronicoacompanante()
                ]]
            );
        }

        public function recordatorioCitas($idCliente){
            return $this -> select(
                "call secretaria_recordatorioCitas(?)",
                [[$idCliente]]
            );
        }

        public function facturacion($tipoId, $numeroId){
            return $this -> select(
                "call secretaria_generarFactura(?,?)",
                [[$tipoId, $numeroId]]
            );
        }

    }

?>