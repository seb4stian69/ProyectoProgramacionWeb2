<?php

class Personal {

    private string $tipoidentificacion
    private int $numeroidentificacion
    private string $nombres
    private string $apellidos
    private string $correoelectronico
    private string $numerotelefono
    private string $tipo

    public function __construct($tipoidentificacion, $numeroidentificacion, $nombres, $apellidos, $correoelectronico, $numerotelefono, $tipo) {

        $this->tipoidentificacion = $tipoidentificacion;
        $this->numeroidentificacion = $numeroidentificacion;
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;
        $this->correoelectronico = $correoelectronico;
        $this->numerotelefono = $numerotelefono;
        $this->tipo = $tipo;

    }

    /**
     * Get the value of tipoidentificacion
     */
    public function getTipoidentificacion(): string
    {
        return $this->tipoidentificacion;
    }

    /**
     * Set the value of tipoidentificacion
     */
    public function setTipoidentificacion(string $tipoidentificacion): self
    {
        $this->tipoidentificacion = $tipoidentificacion;

        return $this;
    }

    /**
     * Get the value of numeroidentificacion
     */
    public function getNumeroidentificacion(): int
    {
        return $this->numeroidentificacion;
    }

    /**
     * Set the value of numeroidentificacion
     */
    public function setNumeroidentificacion(int $numeroidentificacion): self
    {
        $this->numeroidentificacion = $numeroidentificacion;

        return $this;
    }

    /**
     * Get the value of nombres
     */
    public function getNombres(): string
    {
        return $this->nombres;
    }

    /**
     * Set the value of nombres
     */
    public function setNombres(string $nombres): self
    {
        $this->nombres = $nombres;

        return $this;
    }

    /**
     * Get the value of apellidos
     */
    public function getApellidos(): string
    {
        return $this->apellidos;
    }

    /**
     * Set the value of apellidos
     */
    public function setApellidos(string $apellidos): self
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get the value of correoelectronico
     */
    public function getCorreoelectronico(): string
    {
        return $this->correoelectronico;
    }

    /**
     * Set the value of correoelectronico
     */
    public function setCorreoelectronico(string $correoelectronico): self
    {
        $this->correoelectronico = $correoelectronico;

        return $this;
    }

    /**
     * Get the value of numerotelefono
     */
    public function getNumerotelefono(): string
    {
        return $this->numerotelefono;
    }

    /**
     * Set the value of numerotelefono
     */
    public function setNumerotelefono(string $numerotelefono): self
    {
        $this->numerotelefono = $numerotelefono;

        return $this;
    }

    /**
     * Get the value of tipo
     */
    public function getTipo(): string
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     */
    public function setTipo(string $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }
}

?>