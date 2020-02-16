<?php

class factura{

    private $valor_total;
    private $fk_id_cliente;
    private $id_factura;



    public function __construct($id_factura, $valor_total,$fk_id_cliente)
    {
        $this->id_factura = $id_factura;
        $this->valor_total=$valor_total;
        $this->fk_id_cliente=$fk_id_cliente;
    }

    /**
     * Get the value of valor_total
     */ 
    public function getValor_total()
    {
        return $this->valor_total;
    }

    /**
     * Set the value of valor_total
     *
     * @return  self
     */ 
    public function setValor_total($valor_total)
    {
        $this->valor_total = $valor_total;

        return $this;
    }

    /**
     * Get the value of fk_id_cliente
     */ 
    public function getFk_id_cliente()
    {
        return $this->fk_id_cliente;
    }

    /**
     * Set the value of fk_id_cliente
     *
     * @return  self
     */ 
    public function setFk_id_cliente($fk_id_cliente)
    {
        $this->fk_id_cliente = $fk_id_cliente;

        return $this;
    }

    /**
     * Get the value of id_factura
     */ 
    public function getId_factura()
    {
        return $this->id_factura;
    }

    /**
     * Set the value of id_factura
     *
     * @return  self
     */ 
    public function setId_factura($id_factura)
    {
        $this->id_factura = $id_factura;

        return $this;
    }
}

?>