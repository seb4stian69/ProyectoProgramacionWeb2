<?php

class Tratamiento {

    private $identificador;
    private $numerosesion;
    private $peso;
    private $evolucion;
    private $presionsiestolica;
    private $presiondiastolica;
    private $diagnostico_identificador;

    function __construct($identificador, $numerosesion, $peso, $evolucion, $presionsiestolica, $presiondiastolica, $diagnostico_identificador){
        $this->identificador=$identificador;
        $this->numerosesion=$numerosesion;
        $this->peso=$peso;
        $this->evolucion=$evolucion;
        $this->presionsiestolica=$presionsiestolica;
        $this->presiondiastolica=$presiondiastolica;
        $this->diagnostico_identificador=$diagnostico_identificador;
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
     * Get the value of numerosesion
     */
    public function getNumerosesion()
    {
        return $this->numerosesion;
    }

    /**
     * Set the value of numerosesion
     */
    public function setNumerosesion($numerosesion): self
    {
        $this->numerosesion = $numerosesion;

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
     * Get the value of evolucion
     */
    public function getEvolucion()
    {
        return $this->evolucion;
    }

    /**
     * Set the value of evolucion
     */
    public function setEvolucion($evolucion): self
    {
        $this->evolucion = $evolucion;

        return $this;
    }

    /**
     * Get the value of presionsiestolica
     */
    public function getPresionsiestolica()
    {
        return $this->presionsiestolica;
    }

    /**
     * Set the value of presionsiestolica
     */
    public function setPresionsiestolica($presionsiestolica): self
    {
        $this->presionsiestolica = $presionsiestolica;

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
     * Get the value of diagnostico_identificador
     */
    public function getDiagnosticoIdentificador()
    {
        return $this->diagnostico_identificador;
    }

    /**
     * Set the value of diagnostico_identificador
     */
    public function setDiagnosticoIdentificador($diagnostico_identificador): self
    {
        $this->diagnostico_identificador = $diagnostico_identificador;

        return $this;
    }
}

?>