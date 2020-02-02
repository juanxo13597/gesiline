CREATE DATABASE gesiline;
USE gesiline;

CREATE TABLE usuarios(
    id          INT(11) NOT NULL AUTO_INCREMENT,
    name        VARCHAR(255) NOT NULL,
    password    VARCHAR(255) NOT NULL,
    role        INT(11) NOT NULL DEFAULT 0,
    create_at   DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    update_at   DATETIME,

    constraint pk_usuarios primary key (id)

)ENGINE=INNODB;


INSERT INTO usuarios (name, password,role) VALUES ('admin', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', '1');

CREATE TABLE clientes(
    id              INT(11) NOT NULL AUTO_INCREMENT,
    nombre          VARCHAR(255) NOT NULL,
    direccion       VARCHAR(255) NOT NULL,
    telefono        INT(11) NOT NULL,
    dni             VARCHAR(255) NOT NULL,
    cuenta_bancaria VARCHAR(255) NOT NULL,
    create_at       DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    update_at       DATETIME DEFAULT NULL,

    constraint pk_clientes PRIMARY KEY (id)

)ENGINE=INNODB;

CREATE TABLE incidencias(
    id              INT(11) NOT NULL AUTO_INCREMENT,
    tipo            VARCHAR(255) NOT NULL,
    de_cliente      INT(11) NOT NULL,
    descripcion     VARCHAR(255),
    creada_por      int(11) NOT NULL,
    estado          int(11) NOT NULL DEFAULT 1,
    create_at       DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    update_at       DATETIME DEFAULT NULL,


    CONSTRAINT pk_incidencias PRIMARY KEY (id),
    CONSTRAINT fk_incidencias_clientes FOREIGN KEY (de_cliente) REFERENCES clientes(id),
    CONSTRAINT fk_incidencias_usuarios FOREIGN KEY (creada_por) REFERENCES usuarios(id)
    
)ENGINE=INNODB;