<?php

class Estudios {

    private int $identificador;
    private string $tipoindentificacionProfesional;
    private int $numeroidentificacionProfesional;
    private string $institucion;
    private string $tipoestudio;
    private string $nombre;
    private date $fechainicio;
    private date $fechafinal;

    public function __construct($identificador, $tipoindentificacionProfesional, $numeroidentificacionProfesional, $institucion, $tipoestudio, $nombre, $fechainicio, $fechafinal){

        $this -> identificador = $identificador;
        $this -> tipoindentificacionProfesional = $tipoindentificacionProfesional;
        $this -> numeroidentificacionProfesional = $numeroidentificacionProfesional;
        $this -> institucion = $institucion;
        $this -> tipoestudio = $tipoestudio;
        $this -> nombre = $nombre;
        $this -> fechainicio = $fechainicio;
        $this -> fechafinal = $fechafinal;

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
     * Get the value of tipoindentificacionProfesional
     */
    public function getTipoindentificacionProfesional(): string
    {
        return $this->tipoindentificacionProfesional;
    }

    /**
     * Set the value of tipoindentificacionProfesional
     */
    public function setTipoindentificacionProfesional(string $tipoindentificacionProfesional): self
    {
        $this->tipoindentificacionProfesional = $tipoindentificacionProfesional;

        return $this;
    }

    /**
     * Get the value of numeroidentificacionProfesional
     */
    public function getNumeroidentificacionProfesional(): int
    {
        return $this->numeroidentificacionProfesional;
    }

    /**
     * Set the value of numeroidentificacionProfesional
     */
    public function setNumeroidentificacionProfesional(int $numeroidentificacionProfesional): self
    {
        $this->numeroidentificacionProfesional = $numeroidentificacionProfesional;

        return $this;
    }

    /**
     * Get the value of institucion
     */
    public function getInstitucion(): string
    {
        return $this->institucion;
    }

    /**
     * Set the value of institucion
     */
    public function setInstitucion(string $institucion): self
    {
        $this->institucion = $institucion;

        return $this;
    }

    /**
     * Get the value of tipoestudio
     */
    public function getTipoestudio(): string
    {
        return $this->tipoestudio;
    }

    /**
     * Set the value of tipoestudio
     */
    public function setTipoestudio(string $tipoestudio): self
    {
        $this->tipoestudio = $tipoestudio;

        return $this;
    }

    /**
     * Get the value of nombre
     */
    public function getNombre(): string
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     */
    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of fechainicio
     */
    public function getFechainicio(): date
    {
        return $this->fechainicio;
    }

    /**
     * Set the value of fechainicio
     */
    public function setFechainicio(date $fechainicio): self
    {
        $this->fechainicio = $fechainicio;

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