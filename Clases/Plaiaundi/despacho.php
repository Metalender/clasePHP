<?php
class despacho extends espacios{
    private $nombre;
    
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    
    public function getNombre() {
        return $this->nombre;
    }
}

?>