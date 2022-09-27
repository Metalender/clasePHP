<?php
class Variado extends espacio{
    private $tipo="";
    
    public function setTipo($nombre) {
        $this->tipo = $tipo;
    }
    
    public function getTipo() {
        return $this->tipo;
    }
    
    public function construct($puntuWifi,$puntosRed,$tipo) {
        parent::construct;
        $this->tipo = $tipo;
    }
}
?>