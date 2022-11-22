<?php

class ReglaDevolucion{

    private $identificador;
    private $presiondiastolica;
    private $presionisotolica;
    private $peso;
    private $evolucion;
    private $servicio_codigo;
    private $hidden;

    public function __construct($identificador, $presiondiastolica, $presionisotolica, $peso, $evolucion, $servicio_codigo, $hidden){
        
        $this->identificador=$identificador;
        $this->presiondiastolica=$presiondiastolica;
        $this->presionisotolica=$presionisotolica;
        $this->peso=$peso;
        $this->evolucion=$evolucion;
        $this->servicio_codigo=$servicio_codigo;
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
     * Get the value of presionisotolica
     */
    public function getPresionisotolica()
    {
        return $this->presionisotolica;
    }

    /**
     * Set the value of presionisotolica
     */
    public function setPresionisotolica($presionisotolica): self
    {
        $this->presionisotolica = $presionisotolica;

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
     * Get the value of servicio_codigo
     */
    public function getServicioCodigo()
    {
        return $this->servicio_codigo;
    }

    /**
     * Set the value of servicio_codigo
     */
    public function setServicioCodigo($servicio_codigo): self
    {
        $this->servicio_codigo = $servicio_codigo;

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