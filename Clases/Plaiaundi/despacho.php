<?php
class despacho extends espacio{
    private $nombre="";
    
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    
    public function getNombre() {
        return $this->nombre;
    }
    public function construct($puntuWifi,$puntosRed,$nombre) {
        parent::construct;
        $this->nombre = $nombre;
    }
}
?>