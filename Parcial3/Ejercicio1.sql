create database rafaelgar;

use rafaelgar;


create table usuarios
(
idUsuario smallint not null auto_increment,
  nombre    varchar(30),
  apPaterno varchar(30),
  apMaterno varchar(30),
  login     varchar(10),
  password  varchar(34),
  PRIMARY KEY(idUsuario)

);

insert into usuarios(nombre,apPaterno,apMaterno,login,password)
values ('Rafael','Garcia','Villanueva','Rafael','7013dd8caf235788ddedee06ff8ad0ed');

insert into usuarios (nombre,apPaterno,apMaterno,login,password)
values ('Adolfo','Perez','Gutierrez','Adolfo','0db7e7a347aaa68a26218df2a01c99c6');   

insert into usuarios (nombre,apPaterno,apMaterno,login,password)
values ('Fernanda','Pineda','Perez','Fernanda','654dab06fcf6ba54b5f02563fd7712c6');

select * from usuarios;