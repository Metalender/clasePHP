<?php

class ordenador {
    private $SO="";
    private $codHZ="";
    /* @return string*/
    public function getSO()
    {
        return $this->SO;
    }
    
    /* @return mixed*/
    public function getCodHZ()
    {
        return $this->codHZ;
    }
    
    /* @param string $SO*/
    public function setSO($SO)
    {
        $this->SO = $SO;
    }
    /* @param mixed $CodHZ*/
    public function setCodHZ($codHZ)
    {
        $this->codHZ = $codHZ;
    } 
    
    public function print(){
        echo "<h1>".$this->SO."</h1>";
    }
}
?>