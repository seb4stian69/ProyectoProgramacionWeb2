<?php

class ServicioHasMateriaPrima {

    private $codigo_servicio;
    private $codigo_materiaprima;
    private $cantidad_materiaprima;

    public function __construct($codigo_servicio, $codigo_materiaprima, $cantidad_materiaprima){
        $THIS->codigo_servicio=$codigo_servicio;
        $THIS->codigo_materiaprima=$codigo_materiaprima;
        $THIS->cantidad_materiaprima=$cantidad_materiaprima;
    }

    /**
     * Get the value of codigo_servicio
     */
    public function getCodigoServicio()
    {
        return $this->codigo_servicio;
    }

    /**
     * Set the value of codigo_servicio
     */
    public function setCodigoServicio($codigo_servicio): self
    {
        $this->codigo_servicio = $codigo_servicio;

        return $this;
    }

    /**
     * Get the value of codigo_materiaprima
     */
    public function getCodigoMateriaprima()
    {
        return $this->codigo_materiaprima;
    }

    /**
     * Set the value of codigo_materiaprima
     */
    public function setCodigoMateriaprima($codigo_materiaprima): self
    {
        $this->codigo_materiaprima = $codigo_materiaprima;

        return $this;
    }

    /**
     * Get the value of cantidad_materiaprima
     */
    public function getCantidadMateriaprima()
    {
        return $this->cantidad_materiaprima;
    }

    /**
     * Set the value of cantidad_materiaprima
     */
    public function setCantidadMateriaprima($cantidad_materiaprima): self
    {
        $this->cantidad_materiaprima = $cantidad_materiaprima;

        return $this;
    }
}

?>