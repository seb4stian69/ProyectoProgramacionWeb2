<?php

class AgendarCita{

    private $identificador;
    private $tipoindentificacion_clientes;
    private $numeroidentificacion_clientes;
    private $fechahora;

    public function __construct($identificador, $tipoindentificacion_clientes, $numeroidentificacion_clientes, $fechahora){
        $this->identificador=$identificador;
        $this->tipoindentificacion_clientes=$tipoindentificacion_clientes;
        $this->numeroidentificacion_clientes=$numeroidentificacion_clientes;
        $this->fechahora=$fechahora;
    }
    
    /**
     * Get the value of identificador
     */
    public function getIdentificador()
    {
        return $this->identificador;
    }

    /**
     * Set the value of identificador
     */
    public function setIdentificador($identificador): self
    {
        $this->identificador = $identificador;

        return $this;
    }

    /**
     * Get the value of tipoindentificacion_clientes
     */
    public function getTipoindentificacionClientes()
    {
        return $this->tipoindentificacion_clientes;
    }

    /**
     * Set the value of tipoindentificacion_clientes
     */
    public function setTipoindentificacionClientes($tipoindentificacion_clientes): self
    {
        $this->tipoindentificacion_clientes = $tipoindentificacion_clientes;

        return $this;
    }

    /**
     * Get the value of numeroidentificacion_clientes
     */
    public function getNumeroidentificacionClientes()
    {
        return $this->numeroidentificacion_clientes;
    }

    /**
     * Set the value of numeroidentificacion_clientes
     */
    public function setNumeroidentificacionClientes($numeroidentificacion_clientes): self
    {
        $this->numeroidentificacion_clientes = $numeroidentificacion_clientes;

        return $this;
    }

    /**
     * Get the value of fechahora
     */
    public function getFechahora()
    {
        return $this->fechahora;
    }

    /**
     * Set the value of fechahora
     */
    public function setFechahora($fechahora): self
    {
        $this->fechahora = $fechahora;

        return $this;
    }
}

?>