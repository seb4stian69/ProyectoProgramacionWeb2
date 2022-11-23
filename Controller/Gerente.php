<?php

include_once '../Common/DatabaseController.php';

class ControllerGerente extends Database{

    public function eliminacionAprobacionServicio($codigo){
        return $this -> executeStatement(
            "call proyectofinalintegrador.gerente_aprobarServicio(?)",
            [[$codigo]]
        );
    }

    public function reportOne($cat){
        return $this-> select("call gerente_reporteVentasXCategoria(?)",[[$cat]]);
    }

    public function reportTwo(){
        return [
            $this -> selectNoParams("call gerente_reporteVentasXFecha(7)"),
            $this -> selectNoParams("call gerente_reporteVentasXFecha(15)"),
            $this -> selectNoParams("call gerente_reporteVentasXFecha(28)")
        ];
    }

    public function reportThree(){
        return [
            $this -> selectNoParams("call gerente_reporteEvolucionPosCliente()"),
            $this -> selectNoParams("call gerente_reporteEvolucionNegCliente()"),
        ];
    }

}

?>