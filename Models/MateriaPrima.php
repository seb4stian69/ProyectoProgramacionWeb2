<?php

class MateriaPrima {

    private $codigo;
    private $nombre;
    private $descripcion;
    private $costo;
    private $hidden;

    public function __construct($codigo, $nombre, $descripcion, $costo, $hidden){
        $this->codigo=$codigo;
        $this->nombre=$nombre;
        $this->descripcion=$descripcion;
        $this->costo=$costo;
        $this->hidden=$hidden;
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
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     */
    public function setNombre($nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of descripcion
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set the value of descripcion
     */
    public function setDescripcion($descripcion): self
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get the value of costo
     */
    public function getCosto()
    {
        return $this->costo;
    }

    /**
     * Set the value of costo
     */
    public function setCosto($costo): self
    {
        $this->costo = $costo;

        return $this;
    }

    /**
     * Get the value of hidden
     */
    public function getHidden()
    {
        return $this->hidden;
    }

    /**
     * Set the value of hidden
     */
    public function setHidden($hidden): self
    {
        $this->hidden = $hidden;

        return $this;
    }
}





?>