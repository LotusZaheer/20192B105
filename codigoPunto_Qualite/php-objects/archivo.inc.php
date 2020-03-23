<?php 
 
class archivo{ 
    public $id; 
    public $name; 
    public $description;  
    public $ruta; 
    public $tipo;  
    public $size; 
 
    public function __construct($id,$name,$description,$ruta,$tipo,$size) 
    { 
        $this->id=$id; 
        $this->name=$name; 
        $this->description=$description; 
        $this->ruta=$ruta;
        $this->tipo=$tipo;  
        $this->size=$size; 
 
    } 
 
    public function getId(){ 
        return $this->id; 
    } 
 
    public function getName(){ 
        return $this->name; 
    } 
    public function getDescription(){ 
        return $this->description; 
    } 
 
    public function getRuta(){ 
        return $this->ruta; 
    } 
 
    public function getTipo(){ 
        return $this->tipo; 
    } 
 
    public function getSize(){ 
        return $this->size; 
    } 
 
    public function setId($id){ 
        $this->id=$id; 
    } 
 
    public function setName($name){ 
        $this->name=$name; 
    } 
 
    public function setDescription($description){ 
        $this->description=$description; 
    } 
 
    public function setRuta($Ruta){ 
        $this->ruta=$ruta; 
    } 
 
    public function setTipo($tipo){ 
        $this->tipo=$tipo; 
    } 
 
    public function setSize($size){ 
        $this->size=$size; 
    } 
 
} 
 
?>