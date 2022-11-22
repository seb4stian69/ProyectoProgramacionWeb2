<?php

class Ventas {

    private $codigo;
    private $tipoindentificacion_clientes;
    private $numeroidentificacion_clientes;
    private $codigo_metodospago;
    private $fechahora;

    public function __construct($codigo, $tipoindentificacion_clientes, $numeroidentificacion_clientes, $codigo_metodospago, $fechahora){
        $this->codigo=$codigo;
        $this->tipoindentificacion_clientes=$tipoindentificacion_clientes;
        $this->numeroidentificacion_clientes=$numeroidentificacion_clientes;
        $this->codigo_metodospago=$codigo_metodospago;
        $this->fechahora=$fechahora;
    }

    /**
     * Get the value of codigo
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set the value of codigo
     */
    public function setCodigo($codigo): self
    {
        $this->codigo = $codigo;

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
     * Get the value of codigo_metodospago
     */
    public function getCodigoMetodospago()
    {
        return $this->codigo_metodospago;
    }

    /**
     * Set the value of codigo_metodospago
     */
    public function setCodigoMetodospago($codigo_metodospago): self
    {
        $this->codigo_metodospago = $codigo_metodospago;

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