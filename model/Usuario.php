<?php

class Usuario{
   
    private $id;
    private $nomUs;
    private $passUs;

    public function __construct($nomUs, $passUs){
        $this->nomUs = $nomUs;
        $this->passUs = $passUs;
    }

    public function setID($id){
        $this->id = $id;
    }

    public function setName($nomUs){
        $this->nomUs = $nomUs;
    }

    public function setPassword($passUs){
        $this->passUs = $passUs;
    }

    public function getID(){
        return $this->id;
    }

    public function getName(){
        return $this->nomUs;
    }

    public function getPassword(){
        return $this->passUs;
    }

}