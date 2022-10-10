<?php
class alumnos{
    private $codMatricula = "";
    private $ciclo = "";
    private $nombre ="";
    private $dni ="";
    private $email="";
    
    public function setCodMatricula($codMatricula) {
        $this->codMatricula= $codMatricula;
        
    }
    
    public function setCiclo($ciclo) {
        $this->ciclo = $ciclo;
    }
    
    
    public function getCod() {
        return $this->CodMatricula;
    }
    
    public function getCiclo() {
        return $this->ciclo;
    }
    
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    
    public function setDNI($dni) {
        $this->dni = $dni;
    }
    
    public function setEmail($email) {
        $this->email = $email;
    }
    
    public function getNombre() {
        return $this->nombre;
    }
    
    public function getDNI() {
        return $this->dni;
    }
    
    public function getEmail() {
        return $this->email;
    }
    public function __construct($nombre,$dni,$email,$codMatricula,$ciclo) {
        $this->nombre=$nombre;
        $this->dni=$dni;
        $this->email=$email;
        $this->codMatricula = $codMatricula;
        $this->ciclo = $ciclo;
    }
}
?>