<?php

    class Mascota{

        private $id;
        private $nomMas;
        private $raza;
        private $color;
        private $edad;
        private $tamano;
        private $esterilizacion;
        private $condicion;
        private $rasgo;
        private $dueno;
        private $direccion;
        private $telefono;

    public function __construct(
        $nomMas, 
        $raza, 
        $color, 
        $edad, 
        $tamano, 
        $esterilizacion, 
        $condicion, 
        $rasgo, 
        $dueno, 
        $direccion, 
        $telefono
        ) {
        $this->nomMas = $nomMas;
        $this->raza = $raza;
        $this->color = $color;
        $this->edad = $edad;
        $this->tamano = $tamano;
        $this->esterilizacion = $esterilizacion;
        $this->condicion = $condicion;
        $this->rasgo = $rasgo;
        $this->dueno = $dueno;
        $this->direccion = $direccion;
        $this->telefono = $telefono;
    }

    function setID($id) {
        $this->id = $id;
    }

    function setNomMas($nomMas) {
        $this->nomMas = $nomMas;
    }

    function setRaza($raza) {
        $this->raza = $raza;
    }

    function setColor($color) {
        $this->color = $color;
    }

    function setEdad($edad) {
        $this->edad = $edad;
    }

    function setTamano($tamano) {
        $this->tamano = $tamano;
    }

    function setEsterilizacion($esterilizacion) {
        $this->esterilizacion = $esterilizacion;
    }

    function setCondicion($condicion) {
        $this->condicion = $condicion;
    }

    function setRasgo($rasgo) {
        $this->rasgo = $rasgo;
    }

    function setDueno($dueno) {
        $this->dueno = $dueno;
    }

    function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    function getID() {
        return $this->id;
    }

    function getNomMas() {
        return $this->nomMas;
    }

    function getRaza() {
        return $this->raza;
    }

    function getColor() {
        return $this->color;
    }

    function getEdad() {
        return $this->edad;
    }

    function getTamano() {
        return $this->tamano;
    }

    function getEsterilizacion() {
        return $this->esterilizacion;
    }

    function getCondicion() {
        return $this->condicion;
    }

    function getRasgo() {
        return $this->rasgo;
    }

    function getDueno() {
        return $this->dueno;
    }

    function getDireccion() {
        return $this->direccion;
    }

    function getTelefono() {
        return $this->telefono;
    }
}