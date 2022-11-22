<?php

class Categoria {

    private $identificador;
    private $nombre;
    private $descripcion;
    private $hidden;

    public function __construct($identificador, $nombre, $descripcion, $hidden){
        
        $this->identificador=$identificador;
        $this->nombre=$nombre;
        $this->descripcion=$descripcion;
        $this->hidden=$hidden;

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