CREATE TABLE PRODUCTO(
id int not null AUTO_INCREMENT,
nombrepro varchar(50) null,
despro varchar(100)null,
prepo numeric(6,2)null,
estado int null,
CONSTRAINT pk_producto
PRIMARY KEY (id)
);
alter table  PRODUCTO add rutimapro varchar(100)null;
INSERT INTO PRODUCTO (nombrepro,despro,prepo,estado,rutimapro)
 VALUES ('leshe-shavo','leche','14.99',1,'leche-chavo.jpg'),
 ('leshe-shavo-choko','leche de chokolate','19.99',1,'leche-chavo-choko.jpeg')
 ;
 INSERT INTO PRODUCTO (nombrepro,despro,prepo,estado,rutimapro)
 VALUES ('Fruta de ace','Fruta del diablo','35.99',1,'fruta.jpg');
 
 CREATE TABLE USUARIO(
id_usu int  not null AUTO_INCREMENT,
nombre varchar(50),
apeidos varchar(50),
correo varchar(50) not null,
pass varchar(50) not null,
estado int not null,
CONSTRAINT pk_usuario
PRIMARY KEY (id_usu) 
 );
 INSERT INTO USUARIO(nombre,apeidos,correo,pass,estado)
 VALUES('karlos','guerra','ejemplo@gmail.com','123456',1);
 
 create table pedido(
 id_pedido int AUTO_INCREMENT not null,
 id_usu int not null,
 id int not null,
 fecha datetime not null,
 estado int not null,
 direccion varchar(50) not null,
 telefono varchar(12)not null,
 PRIMARY KEY (id_pedido)
 );