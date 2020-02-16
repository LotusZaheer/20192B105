<?php
    class usuario{
       
        private $id_cliente;
        private $fecha_nacimiento;
        private $nombre;
        private $email;
        private $contrasena;
        private $direccion;
        private $fk_id_ciudad;

        public function __construct($id_cliente,$nombre,$fecha_nacimiento,$email,$contrasena,$direccion,$fk_id_ciudad)
        {
            $this->id_cliente=$id_cliente;
            $this->nombre=$nombre;
            $this->fecha_nacimiento=$fecha_nacimiento;
            $this->email=$email;
            $this->contrasena=$contrasena;
            $this->direccion=$direccion;
            $this->fk_id_ciudad=$fk_id_ciudad;
        }

        public function getId_cliente(){
            return $this->id_cliente;
        }
        public function getNombre(){
            return $this->nombre;
        }
        public function getEmail(){
            return $this->email;
        }
        public function getContrasena(){
            return $this->contrasena;
        }
        public function getFecha_nacimiento(){
            return $this->fecha_nacimiento;
        }
        public function getDireccion(){
            return $this->direccion;
        }
        public function getFk_id_ciudad(){
            return $this->fk_id_ciudad;
        }

        public function setId_nombre($new){
            $this->id_cliente=$new;
        }
        public function setNombre($new){
            $this->nombre=$new;
        }
        public function setEmail($new){
            $this->email=$new;
        }
        public function setContrasena($new){
            $this->contrasena=$new;
        }
        public function setFecha_nacimiento($new){
            $this->fecha_nacimiento=$new;
        }
        public function setDireccion($new){
            $this->direccion=$new;
        }
        public function setFk_id_ciudad($new){
            $this->fk_id_ciudad=$new;
        }
    }
?>