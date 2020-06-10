<?php

class Callejero{

    private $id;
    private $calleCan;
    private $colCan;
    private $rasCan;
    private $condCan;

    public function __construct(    
        $calleCan, 
        $colCan,
        $rasCan,
        $condCan 
    ) {
        $this->calleCan = $calleCan;
        $this->colCan = $colCan;
        $this->rasCan = $rasCan;
        $this->condCan = $condCan;
    }

    public function setID($id){
        $this->id = $id;
    }

    public function setCalle($calleCan){
        $this->calleCan = $calleCan;
    }

    public function setColonia($colCan){
        $this->colCan = $colCan;
    }

    public function setRasgo($rasCan){
        $this->rasCan = $rasCan;
    }

    public function setCondicion($condCan){
        $this->condCan = $condCan;
    }

    public function getID(){
        return $this->id;
    }

    public function getCalle(){
        return $this->calleCan;
    }

    public function getColonia(){
        return $this->colCan;
    }

    public function getRasgo(){
        return $this->rasCan;
    }
    
    public function getCondicion(){
        return $this->condCan;
    }

}