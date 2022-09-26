<?php
class Docente {
    private $sueldo = 0;
    
    public function setDocente($sueldo) {
        $this->sueldo = $sueldo;
    }
    
    public function get_sueldo() {
        return $this->sueldo;
    }
}

?>