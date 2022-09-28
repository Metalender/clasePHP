<?php
class despacho extends espacio{
    private $nombre="";
    private array $ordenadores;
    
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    
    public function getNombre() {
        return $this->nombre;
    }
    public function __construct($puntuWifi,$puntosRed,$nombre) {
        parent::construct;
        $this->nombre = $nombre;
    }
}
?>