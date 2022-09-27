<?php
class docente extends persona{
    private $sueldo = 0;
    
    public function setDocente($sueldo) {
        $this->sueldo = $sueldo;
    }
    
    public function getSueldo() {
        return $this->sueldo;
    }
    
    public function construct($nombre,$dni,$email,$sueldo) {
        parent::construct;
        $this->sueldo = $sueldo;
    }
}

?>