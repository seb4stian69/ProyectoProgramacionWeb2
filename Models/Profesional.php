<?php

class Profesional {

    private $tipoindentificacion;
    private $numeroidentificacion;
    private $nombres;
    private $apellidos;
    private $correoelectronico;
    private $numerotelefono;
    private $direccionresidencia;
    private $hidden;

    function __construct($tipoindentificacion, $numeroidentificacion, $nombres, $apellidos, $correoelectronico, $numerotelefono, $direccionresidencia, $hidden){

        $this->tipoindentificacion=$tipoindentificacion;
        $this->numeroidentificacion=$numeroidentificacion;
        $this->nombres=$nombres;
        $this->apellidos=$apellidos;
        $this->correoelectronico=$correoelectronico;
        $this->numerotelefono=$numerotelefono;
        $this->direccionresidencia=$direccionresidencia;
        $this->hidden=$hidden;

    }

    /**
     * Get the value of tipoindentificacion
     */
    public function getTipoindentificacion()
    {
        return $this->tipoindentificacion;
    }

    /**
     * Set the value of tipoindentificacion
     */
    public function setTipoindentificacion($tipoindentificacion): self
    {
        $this->tipoindentificacion = $tipoindentificacion;

        return $this;
    }

    /**
     * Get the value of numeroidentificacion
     */
    public function getNumeroidentificacion()
    {
        return $this->numeroidentificacion;
    }

    /**
     * Set the value of numeroidentificacion
     */
    public function setNumeroidentificacion($numeroidentificacion): self
    {
        $this->numeroidentificacion = $numeroidentificacion;

        return $this;
    }

    /**
     * Get the value of nombres
     */
    public function getNombres()
    {
        return $this->nombres;
    }

    /**
     * Set the value of nombres
     */
    public function setNombres($nombres): self
    {
        $this->nombres = $nombres;

        return $this;
    }

    /**
     * Get the value of apellidos
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set the value of apellidos
     */
    public function setApellidos($apellidos): self
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get the value of correoelectronico
     */
    public function getCorreoelectronico()
    {
        return $this->correoelectronico;
    }

    /**
     * Set the value of correoelectronico
     */
    public function setCorreoelectronico($correoelectronico): self
    {
        $this->correoelectronico = $correoelectronico;

        return $this;
    }

    /**
     * Get the value of numerotelefono
     */
    public function getNumerotelefono()
    {
        return $this->numerotelefono;
    }

    /**
     * Set the value of numerotelefono
     */
    public function setNumerotelefono($numerotelefono): self
    {
        $this->numerotelefono = $numerotelefono;

        return $this;
    }

    /**
     * Get the value of direccionresidencia
     */
    public function getDireccionresidencia()
    {
        return $this->direccionresidencia;
    }

    /**
     * Set the value of direccionresidencia
     */
    public function setDireccionresidencia($direccionresidencia): self
    {
        $this->direccionresidencia = $direccionresidencia;

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