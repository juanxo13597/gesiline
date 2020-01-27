CREATE DATABASE gesiline;
USE gesiline;

CREATE TABLE usuarios(
    id          int(11) not null auto_increment,
    name        varchar(255) not null,
    password    varchar(255) not null,
    role        int(11) not null default 0,

    constraint pk_usuarios primary key (id)

)ENGINE=INNODB;

CREATE TABLE clientes(
    id              int(11) not null auto_increment,
    nombre          varchar(255) not null,
    direccion       varchar(255) not null,
    telefono        int(11) not null,

    constraint pk_clientes primary key (id)

)ENGINE=INNODB;