<?php

class Institucion{
    private $id;
    private $nomInst;
    private $dirInst;
    private $telInst;
    private $cp;
    private $nomRep;
    private $cargo;
    private $tipoInst;
    private $ideTrib;

    public function __construct(
        $nomInst,
        $dirInst,
        $telInst,
        $cp,
        $nomRep,
        $cargo,
        $tipoInst,
        $ideTrib
    ) {
        $this->nomInst = $nomInst;
        $this->dirInst = $dirInst;
        $this->telInst = $telInst;
        $this->cp = $cp;
        $this->nomRep = $nomRep;
        $this->cargo = $cargo;
        $this->tipoInst = $tipoInst;
        $this->ideTrib = $ideTrib;
    }

    public function setID($id){
        $this->id = $id;
    }

    public function setNomInst($nomInst){
        $this->nomInst = $nomInst;
    }

    public function setDirInst($dirInst){
        $this->dirInst = $dirInst;
    }

    public function setTelInst($telInst){
        $this->telInst = $telInst;
    }

    public function setCP($cp){
        $this->cp = $cp;
    }

    public function setNomRep($nomRep){
        $this->nomRep = $nomRep;
    }

    public function setCargo($cargo){
        $this->cargo = $cargo;
    }

    public function setTipoInst($tipoInst){
        $this->tipoInst = $tipoInst;
    }

    public function setIdeTrib($ideTrib){
        $this->ideTrib = $ideTrib;
    }

    public function getID(){
        return $this->id;
    }

    public function getNomInst(){
        return $this->nomInst;
    }

    public function getDirInst(){
        return $this->dirInst;
    }

    public function getTelInst(){
        return $this->telInst;
    }

    public function getCP(){
        return $this->cp;
    }

    public function getNomRep(){
        return $this->nomRep;
    }

    public function getCargo(){
        return $this->cargo;
    }

    public function getTipoInst(){
        return $this->tipoInst;
    }

    public function getIdeTrib(){
        return $this->ideTrib;
    }
}