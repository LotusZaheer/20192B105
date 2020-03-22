<?php

class archivo{
    public $id_archivo;
    public $name;
    public $description;
    public $tipo;

    public function __construct($id_archivo,$name,$description,$tipo)
    {
        $this->id_archivo=$id_archivo;
        $this->name=$name;
        $this->description=$description;
        $this->tipo=$tipo;

    }

    public function getId(){
        return $this->id_archivo;
    }

    public function getName(){
        return $this->name;
    }
    public function getDescription(){
        return $this->description;
    }

    public function getTipo(){
        return $this->tipo;
    }

    public function setId($id_archivo){
        $this->id_archivo=$id_archivo;
    }

    public function setName($name){
        $this->name=$name;
    }

    public function setDescription($description){
        $this->description=$description;
    }

    public function setTipo($tipo){
        $this->tipo=$tipo;
    }

}

?>