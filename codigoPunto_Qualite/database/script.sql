create database 20192B105
use 20192B105;
create table ciudad(
	id_ciudad int not null auto_increment,
	nombre varchar(30),
	PRIMARY KEY(id_ciudad)
);

create TABLE droga(
	id_droga int not null auto_increment,
	nombre VARCHAR(30) not null,
	imagen varchar(60),
	valor int not null,
	PRIMARY KEY(id_droga)
);

create Table cliente(
	id_cliente int not null auto_increment,
	nombre varchar(60) not null,
	fecha_nacimiento date not null,
	email varchar(60) not null,
	contrasena varchar(60) not null,
	direccion varchar(60) not null,
	ctipado char(1) not null,
	fk_id_ciudad int not null,
	PRIMARY KEY(id_cliente),
	Constraint fk_ciudad foreign key(fk_id_ciudad)
	    references ciudad(id_ciudad)
);

create table factura(
	id_factura int not null auto_increment,
	valor_total int not null,
	fk_id_cliente int not null,
	PRIMARY key(id_factura),
	Constraint fk_cliente foreign key(fk_id_cliente)
    	references cliente(id_cliente)
);

create table pedido(
	id_pedido int not null auto_increment,
	fk_id_factura int not null,
	fk_id_droga int not null,
	PRIMARY key(id_pedido),
	Constraint fk_droga foreign key(fk_id_droga)
	    references droga(id_droga),
	Constraint fk_factura foreign  key(fk_id_factura)
	    references factura(id_factura)
);

CREATE TABLE archivo (
    id_archivo int(11) NOT NULL,
    name varchar(200) NOT NULL,
    description varchar(200) NOT NULL,
    ruta varchar(200) NOT NULL,
    tipo varchar(200) NOT NULL
);
CREATE TABLE hoja_de_vida (
    name varchar(50) NOT NULL,
    last_name varchar(50) NOT NULL,
    email varchar(50) NOT NULL, 
    tel int(15) NOT NULL,
    cargo varchar(100) NOT NULL, 
    last_org varchar (100),
    year_start int(4),
    year_stop int(4),
    description text NOT NULL,
    univ varchar(100),
    carrer varchar(70),
    prom FLOAT
);