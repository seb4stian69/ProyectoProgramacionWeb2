<?php

class Servicio {

    private $codigo;
    private $identificador_categoria;
    private $nombre;
    private $descripcion;
    private $porcentajeganancia;
    private $hidden;
    private $aprobado;

    public function __construct($codigo, $identificador_categoria, $nombre, $descripcion, $porcentajeganancia, $hidden, $aprobado){
        $this->codigo=$codigo;
        $this->identificador_categoria=$identificador_categoria;
        $this->nombre=$nombre;
        $this->descripcion=$descripcion;
        $this->porcentajeganancia=$porcentajeganancia;
        $this->hidden=$hidden;
        $this->aprobado=$aprobado;
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
     * Get the value of identificador_categoria
     */
    public function getIdentificadorCategoria()
    {
        return $this->identificador_categoria;
    }

    /**
     * Set the value of identificador_categoria
     */
    public function setIdentificadorCategoria($identificador_categoria): self
    {
        $this->identificador_categoria = $identificador_categoria;

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
     * Get the value of porcentajeganancia
     */
    public function getPorcentajeganancia()
    {
        return $this->porcentajeganancia;
    }

    /**
     * Set the value of porcentajeganancia
     */
    public function setPorcentajeganancia($porcentajeganancia): self
    {
        $this->porcentajeganancia = $porcentajeganancia;

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

    /**
     * Get the value of aprobado
     */
    public function getAprobado()
    {
        return $this->aprobado;
    }

    /**
     * Set the value of aprobado
     */
    public function setAprobado($aprobado): self
    {
        $this->aprobado = $aprobado;

        return $this;
    }

}

?>