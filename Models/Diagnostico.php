<?php

class Diagnostico {

    private $identificador;
    private $numerosesionesrecomendadas;
    private $codigo_servicio;
    private $presionsistolica;
    private $presiondiastolica;
    private $peso;
    private $diagnostico;
    private $derivacion;
    private $clientes_tipoindentificacion;
    private $clientes_numeroidentificacion;
    private $profesional_tipoindentificacion;
    private $profesional_numeroidentificacion;

    public function __construct($identificador, $numerosesionesrecomendadas, $codigo_servicio, $presionsistolica, $presiondiastolica, $peso, $diagnostico, $derivacion, $clientes_tipoindentificacion, $clientes_numeroidentificacion, $profesional_tipoindentificacion, $profesional_numeroidentificacion){
        
        $this->identificador=$identificador;
        $this->numerosesionesrecomendadas=$numerosesionesrecomendadas;
        $this->codigo_servicio=$codigo_servicio;
        $this->presionsistolica=$presionsistolica;
        $this->presiondiastolica=$presiondiastolica;
        $this->peso=$peso;
        $this->diagnostico=$diagnostico;
        $this->derivacion=$derivacion;
        $this->clientes_tipoindentificacion=$clientes_tipoindentificacion;
        $this->clientes_numeroidentificacion=$clientes_numeroidentificacion;
        $this->profesional_tipoindentificacion=$profesional_tipoindentificacion;
        $this->profesional_numeroidentificacion=$profesional_numeroidentificacion;

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
     * Get the value of numerosesionesrecomendadas
     */
    public function getNumerosesionesrecomendadas()
    {
        return $this->numerosesionesrecomendadas;
    }

    /**
     * Set the value of numerosesionesrecomendadas
     */
    public function setNumerosesionesrecomendadas($numerosesionesrecomendadas): self
    {
        $this->numerosesionesrecomendadas = $numerosesionesrecomendadas;

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
     * Get the value of presionsistolica
     */
    public function getPresionsistolica()
    {
        return $this->presionsistolica;
    }

    /**
     * Set the value of presionsistolica
     */
    public function setPresionsistolica($presionsistolica): self
    {
        $this->presionsistolica = $presionsistolica;

        return $this;
    }

    /**
     * Get the value of presiondiastolica
     */
    public function getPresiondiastolica()
    {
        return $this->presiondiastolica;
    }

    /**
     * Set the value of presiondiastolica
     */
    public function setPresiondiastolica($presiondiastolica): self
    {
        $this->presiondiastolica = $presiondiastolica;

        return $this;
    }

    /**
     * Get the value of peso
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * Set the value of peso
     */
    public function setPeso($peso): self
    {
        $this->peso = $peso;

        return $this;
    }

    /**
     * Get the value of diagnostico
     */
    public function getDiagnostico()
    {
        return $this->diagnostico;
    }

    /**
     * Set the value of diagnostico
     */
    public function setDiagnostico($diagnostico): self
    {
        $this->diagnostico = $diagnostico;

        return $this;
    }

    /**
     * Get the value of derivacion
     */
    public function getDerivacion()
    {
        return $this->derivacion;
    }

    /**
     * Set the value of derivacion
     */
    public function setDerivacion($derivacion): self
    {
        $this->derivacion = $derivacion;

        return $this;
    }

    /**
     * Get the value of clientes_tipoindentificacion
     */
    public function getClientesTipoindentificacion()
    {
        return $this->clientes_tipoindentificacion;
    }

    /**
     * Set the value of clientes_tipoindentificacion
     */
    public function setClientesTipoindentificacion($clientes_tipoindentificacion): self
    {
        $this->clientes_tipoindentificacion = $clientes_tipoindentificacion;

        return $this;
    }

    /**
     * Get the value of clientes_numeroidentificacion
     */
    public function getClientesNumeroidentificacion()
    {
        return $this->clientes_numeroidentificacion;
    }

    /**
     * Set the value of clientes_numeroidentificacion
     */
    public function setClientesNumeroidentificacion($clientes_numeroidentificacion): self
    {
        $this->clientes_numeroidentificacion = $clientes_numeroidentificacion;

        return $this;
    }

    /**
     * Get the value of profesional_tipoindentificacion
     */
    public function getProfesionalTipoindentificacion()
    {
        return $this->profesional_tipoindentificacion;
    }

    /**
     * Set the value of profesional_tipoindentificacion
     */
    public function setProfesionalTipoindentificacion($profesional_tipoindentificacion): self
    {
        $this->profesional_tipoindentificacion = $profesional_tipoindentificacion;

        return $this;
    }

    /**
     * Get the value of profesional_numeroidentificacion
     */
    public function getProfesionalNumeroidentificacion()
    {
        return $this->profesional_numeroidentificacion;
    }

    /**
     * Set the value of profesional_numeroidentificacion
     */
    public function setProfesionalNumeroidentificacion($profesional_numeroidentificacion): self
    {
        $this->profesional_numeroidentificacion = $profesional_numeroidentificacion;

        return $this;
    }
}

?>