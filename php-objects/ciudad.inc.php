<?php

class ciudad{
    private $id_ciudad;
    private $nombre;

    public function __construct($id_ciudad,$nombre)
    {
        $this->id_ciudad=$id_ciudad;
        $this->nombre=$nombre;
    }

    public function getId(){
        return $this->id_ciudad;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setId($id_ciudad){
        $this->id_ciudad=$id_ciudad;
    }

    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
}

?>