<?php

class droga{

    protected $id_droga;
    private $nombre;
    private $imagen;
    private $valor;

    public function __construct($id_droga,$nombre,$imagen,$valor)
    {
        $this->id_droga=$id_droga;
        $this->nombre=$nombre;
        $this->imagen=$imagen;
        $this->valor=$valor;
    }



    /**
     * Get the value of id_droga
     */ 
    public function getId_droga()
    {
        return $this->id_droga;
    }

    /**
     * Set the value of id_droga
     *
     * @return  self
     */ 
    public function setId_droga($id_droga)
    {
        $this->id_droga = $id_droga;

        return $this;
    }

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of imagen
     */ 
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * Set the value of imagen
     *
     * @return  self
     */ 
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;

        return $this;
    }

    /**
     * Get the value of valor
     */ 
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set the value of valor
     *
     * @return  self
     */ 
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }
}
