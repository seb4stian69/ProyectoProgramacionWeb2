<?php

class User {

    private string $username;
    private string $contrasena;
    private string $userType;

    public function __construct($username, $contrasena, $userType) {
        $this -> username = $username;
        $this -> contrasena = $contrasena;
        $this -> userType = $userType;
    }

    public function getUsername() {return $this->usernanme ;}
    public function getContrasena(){return $this->contrasena;}
    public function getUserType() {return $this->userType;}

    public function setUsername($username){$this->username = $username;}
    public function setContrasena($contrasena){$this->contrasena = $contrasena;}
    public function setUserType($userType){$this->userTyp = $userType;}

}

?>