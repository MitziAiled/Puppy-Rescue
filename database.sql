DROP DATABASE IF EXISTS puppyrescue;

CREATE DATABASE puppyRescue;

USE puppyRescue;

CREATE TABLE usuario( 
    id INT NOT NULL AUTO_INCREMENT, 
    nomUs VARCHAR(25) NOT NULL, 
    passUs VARCHAR(8) NOT NULL, 

    PRIMARY KEY (id)
);

CREATE TABLE mascota(
    id INT NOT NULL AUTO_INCREMENT,
    nomMas VARCHAR(25) NOT NULL,
    raza VARCHAR(25) NOT NULL,
    color VARCHAR (25) NOT NULL,
    edad INT NOT NULL,
    tamano VARCHAR(25) NOT NULL,
    esterilizacion VARCHAR(25) NOT NULL,
    condicion VARCHAR(100) NOT NULL,
    rasgo VARCHAR(100) NOT NULL,
    dueno VARCHAR(50) NOT NULL,
    direccion VARCHAR(50) NOT NULL,
    telefono INT NOT NULL,

    PRIMARY KEY (id)
);

CREATE TABLE canino( 
    id INT NOT NULL AUTO_INCREMENT, 
    calleCan VARCHAR(50) NOT NULL,
    colCan VARCHAR(50) NOT NULL, 
    rasCan VARCHAR(100) NOT NULL, 
    condCan VARCHAR(100) NOT NULL, 

    PRIMARY KEY (id)
);

CREATE TABLE institucion(
    id INT NOT NULL AUTO_INCREMENT,
    nomInst VARCHAR(50) NOT NULL,
    dirInst VARCHAR(50) NOT NULL,
    telInst INT NOT NULL,
    cp INT NOT NULL,
    nomRep VARCHAR(50) NOT NULL,
    cargo VARCHAR(50) NOT NULL,
    tipoInst VARCHAR(50) NOT NULL,
    ideTrib VARCHAR(25) NOT NULL,

    PRIMARY KEY (id) 
);
