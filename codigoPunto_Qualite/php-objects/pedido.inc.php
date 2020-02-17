<?php

class pedido{
    protected $id_pedido;
    protected $fk_id_factura;
    protected $fk_id_droga;

    public function __construct($id_pedido, $fk_id_factura, $fk_id_droga)
    {
        $this->id_pedido = $id_pedido;
        $this->fk_id_factura = $fk_id_factura;
        $this->fk_id_droga = $fk_id_droga;
    }


    /**
     * Get the value of id_pedido
     */ 
    public function getId_pedido()
    {
        return $this->id_pedido;
    }

    /**
     * Set the value of id_pedido
     *
     * @return  self
     */ 
    public function setId_pedido($id_pedido)
    {
        $this->id_pedido = $id_pedido;

        return $this;
    }

    /**
     * Get the value of fk_id_factura
     */ 
    public function getFk_id_factura()
    {
        return $this->fk_id_factura;
    }

    /**
     * Set the value of fk_id_factura
     *
     * @return  self
     */ 
    public function setFk_id_factura($fk_id_factura)
    {
        $this->fk_id_factura = $fk_id_factura;

        return $this;
    }

    /**
     * Get the value of fk_id_droga
     */ 
    public function getFk_id_droga()
    {
        return $this->fk_id_droga;
    }

    /**
     * Set the value of fk_id_droga
     *
     * @return  self
     */ 
    public function setFk_id_droga($fk_id_droga)
    {
        $this->fk_id_droga = $fk_id_droga;

        return $this;
    }
}

?>
