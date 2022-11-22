<?php

    private int $identificador
    private string $tipoindentificacion_profesional
    private int $numeroidentificacion_profesional
    private string $nombremepresa
    private string $cargo
    private date $fechaInicio
    private date $fechafinal

    public function __construct($identificador, $tipoindentificacion_profesional, $numeroidentificacion_profesional, $nombremepresa, $cargo, $fechaInicio, $fechafinal){
        $this->identificador= $identificador
        $this->tipoindentificacion_profesional= $tipoindentificacion_profesional
        $this->numeroidentificacion_profesional= $numeroidentificacion_profesional
        $this->nombremepresa= $nombremepresa
        $this->cargo= $cargo
        $this->fechaInicio= $fechaInicio
        $this->fechafinal= $fechafinal
    }
    
    /**
     * Get the value of identificador
     */
    public function getIdentificador(): int
    {
        return $this->identificador;
    }

    /**
     * Set the value of identificador
     */
    public function setIdentificador(int $identificador): self
    {
        $this->identificador = $identificador;

        return $this;
    }

    /**
     * Get the value of tipoindentificacion_profesional
     */
    public function getTipoindentificacionProfesional(): string
    {
        return $this->tipoindentificacion_profesional;
    }

    /**
     * Set the value of tipoindentificacion_profesional
     */
    public function setTipoindentificacionProfesional(string $tipoindentificacion_profesional): self
    {
        $this->tipoindentificacion_profesional = $tipoindentificacion_profesional;

        return $this;
    }

    /**
     * Get the value of numeroidentificacion_profesional
     */
    public function getNumeroidentificacionProfesional(): int
    {
        return $this->numeroidentificacion_profesional;
    }

    /**
     * Set the value of numeroidentificacion_profesional
     */
    public function setNumeroidentificacionProfesional(int $numeroidentificacion_profesional): self
    {
        $this->numeroidentificacion_profesional = $numeroidentificacion_profesional;

        return $this;
    }

    /**
     * Get the value of nombremepresa
     */
    public function getNombremepresa(): string
    {
        return $this->nombremepresa;
    }

    /**
     * Set the value of nombremepresa
     */
    public function setNombremepresa(string $nombremepresa): self
    {
        $this->nombremepresa = $nombremepresa;

        return $this;
    }

    /**
     * Get the value of cargo
     */
    public function getCargo(): string
    {
        return $this->cargo;
    }

    /**
     * Set the value of cargo
     */
    public function setCargo(string $cargo): self
    {
        $this->cargo = $cargo;

        return $this;
    }

    /**
     * Get the value of fechaInicio
     */
    public function getFechaInicio(): date
    {
        return $this->fechaInicio;
    }

    /**
     * Set the value of fechaInicio
     */
    public function setFechaInicio(date $fechaInicio): self
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    /**
     * Get the value of fechafinal
     */
    public function getFechafinal(): date
    {
        return $this->fechafinal;
    }

    /**
     * Set the value of fechafinal
     */
    public function setFechafinal(date $fechafinal): self
    {
        $this->fechafinal = $fechafinal;

        return $this;
    }
    }

    

?>