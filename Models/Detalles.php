<?php

class Detalles {

    private $codigo;
    private $codigo_ventas;
    private $codigo_servicio;
    private $cantidad;
    private $precio;

    public function __construct($codigo, $codigo_ventas, $codigo_servicio, $cantidad, $precio){
        $this->codigo=$codigo;
        $this->codigo_ventas=$codigo_ventas;
        $this->codigo_servicio=$codigo_servicio;
        $this->cantidad=$cantidad;
        $this->precio=$precio;
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
     * Get the value of codigo_ventas
     */
    public function getCodigoVentas()
    {
        return $this->codigo_ventas;
    }

    /**
     * Set the value of codigo_ventas
     */
    public function setCodigoVentas($codigo_ventas): self
    {
        $this->codigo_ventas = $codigo_ventas;

        return $this;
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
     * Get the value of cantidad
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set the value of cantidad
     */
    public function setCantidad($cantidad): self
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get the value of precio
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set the value of precio
     */
    public function setPrecio($precio): self
    {
        $this->precio = $precio;

        return $this;
    }
}

?>