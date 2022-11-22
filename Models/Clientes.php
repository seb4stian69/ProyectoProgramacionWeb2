<?php

class Clientes {

    private $tipoindentificacion;
    private $numeroidentificacion;
    private $nombres;
    private $apellidos;
    private $fechanacimiento;
    private $correoelectronico;
    private $numerotelefono;
    private $direccionResidencia;
    private $nombrescompanante;
    private $apellidosacompanante;
    private $fechanacimientoacompanante;
    private $correoelectronicoacompanante;

    public function __construct($tipoindentificacion, $numeroidentificacion, $nombres, $apellidos, $fechanacimiento, $correoelectronico, $numerotelefono, $direccionResidencia, $nombrescompanante, $apellidosacompanante, $fechanacimientoacompanante, $correoelectronicoacompanante){
        $this->tipoindentificacion=$tipoindentificacion;
        $this->numeroidentificacion=$numeroidentificacion;
        $this->nombres=$nombres;
        $this->apellidos=$apellidos;
        $this->fechanacimiento=$fechanacimiento;
        $this->correoelectronico=$correoelectronico;
        $this->numerotelefono=$numerotelefono;
        $this->direccionResidencia=$direccionResidencia;
        $this->nombrescompanante=$nombrescompanante;
        $this->apellidosacompanante=$apellidosacompanante;
        $this->fechanacimientoacompanante=$fechanacimientoacompanante;
        $this->correoelectronicoacompanante=$correoelectronicoacompanante;
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
     * Get the value of fechanacimiento
     */
    public function getFechanacimiento()
    {
        return $this->fechanacimiento;
    }

    /**
     * Set the value of fechanacimiento
     */
    public function setFechanacimiento($fechanacimiento): self
    {
        $this->fechanacimiento = $fechanacimiento;

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
     * Get the value of direccionResidencia
     */
    public function getDireccionResidencia()
    {
        return $this->direccionResidencia;
    }

    /**
     * Set the value of direccionResidencia
     */
    public function setDireccionResidencia($direccionResidencia): self
    {
        $this->direccionResidencia = $direccionResidencia;

        return $this;
    }

    /**
     * Get the value of nombrescompanante
     */
    public function getNombrescompanante()
    {
        return $this->nombrescompanante;
    }

    /**
     * Set the value of nombrescompanante
     */
    public function setNombrescompanante($nombrescompanante): self
    {
        $this->nombrescompanante = $nombrescompanante;

        return $this;
    }

    /**
     * Get the value of apellidosacompanante
     */
    public function getApellidosacompanante()
    {
        return $this->apellidosacompanante;
    }

    /**
     * Set the value of apellidosacompanante
     */
    public function setApellidosacompanante($apellidosacompanante): self
    {
        $this->apellidosacompanante = $apellidosacompanante;

        return $this;
    }

    /**
     * Get the value of fechanacimientoacompanante
     */
    public function getFechanacimientoacompanante()
    {
        return $this->fechanacimientoacompanante;
    }

    /**
     * Set the value of fechanacimientoacompanante
     */
    public function setFechanacimientoacompanante($fechanacimientoacompanante): self
    {
        $this->fechanacimientoacompanante = $fechanacimientoacompanante;

        return $this;
    }

    /**
     * Get the value of correoelectronicoacompanante
     */
    public function getCorreoelectronicoacompanante()
    {
        return $this->correoelectronicoacompanante;
    }

    /**
     * Set the value of correoelectronicoacompanante
     */
    public function setCorreoelectronicoacompanante($correoelectronicoacompanante): self
    {
        $this->correoelectronicoacompanante = $correoelectronicoacompanante;

        return $this;
    }
}

?>