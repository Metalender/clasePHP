<?php
class Persona{
private $nombre;
private $dni;
private $email;

    public function __construct($nombre, $dni, $email){
        $this->nombre = $nombre;
        $this->dni = $dni;
        $this->email = $email;

    }
}
?>