<?php
abstract class espacio{
    private $puntuWifi=false;
    private $puntosRed=0;
    
    /* @return number*/
    public function getPuntosRed()
    {
        return $this->puntosRed;
    }
    
    /* @param boolean $puntuWifi*/
    public function setPuntuWifi($puntuWifi)
    {
        $this->puntuWifi = $puntuWifi;
    }
    
    /**
     * @param number $puntosRed
     */
    public function setPuntosRed($puntosRed)
    {
        $this->puntosRed = $puntosRed;
    }
    
    public function getPuntuWifi()
    {
        return $this->puntuWifi;
    }
    
    public function __construct($puntuWifi,$puntosRed) {
        $this->puntusWifi = $puntusWifi;
        $this->puntosRed = $puntosRed;
    }
}

?>