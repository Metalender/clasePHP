<?php

class ordenador {
    private $SO="";
    private $codHZ="";
    Private $esSobremesa=false;
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
    
    public function setEsSobremesa($esSobremesa)
    {
        $this->esSobremesa = $esSobremesa;
    }
    public function getEsSobremesa()
    {
        return $this->esSobremesa;
    }
    
    public function __construct($SO,$codHZ,$esSobremesa) {
        $this->SO = $SO;
        $this->codHZ = $codHZ;
        $this->esSobremesa = $esSobremesa;
    }
    
    public function toString(){
        return "<h1>".$this->SO."</h1>"
            ."<h2>".$this->codHZ."</h2>"
                .($this->esSobremesa ?"<h3 style='color:green'>VERDADERO</h3>" :"<h3 style='color:red'>FALSO</h3>");;
    }
}
?>