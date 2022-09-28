<?php
class alumno extends persona{
    private $codMatricula = "";
    private $ciclo = "";
    
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
    
    public function __construct($nombre,$dni,$email,$codMatricula,$ciclo) {
        parent::construct;
        $this->codMatricula = $codMatricula;
        $this->ciclo = $ciclo;
    }
}

?>