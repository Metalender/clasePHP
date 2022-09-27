<?php
abstract class persona{
private $nombre="";
private $dni="";
private $email="";

public function setNombre($nombre) {
    $this->nombre = $nombre;
}

public function setDNI($dni) {
    $this->dni = $dni;
}

public function setEmail($email) {
    $this->email = $email;
}

public function getNombre() {
    return $this->nombre;
}

public function getDNI() {
    return $this->dni;
}

public function getEmail() {
    return $this->email;
}
public function construct($nombre,$dni,$email) {
    $this->nombre = $nombre;
    $this->dni = $dni;
    $this->email = $email;
}

}
?>