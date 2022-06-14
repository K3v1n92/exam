CREATE DATABASE dbexamen;
create table producto
(
	serie varchar(10) primary key,
    nombre varchar(30),
    marca varchar(30),
    costo float(30),
    existencia int
);

create table proveedores 
(
	id int primary key,
    nombre varchar(30), 
    serie varchar(10),
    
    FOREIGN KEY (serie)
    REFERENCES  producto(serie)
    ON DELETE CASCADE
);

insert into producto(serie,nombre,marca,costo,existencia) values ('RX20148','Computadora','DELL','25000','20');
insert into producto(serie,nombre,marca,costo,existencia) values ('TT30248','Impresora','CANON','85000','100');

SELECT * FROM producto;