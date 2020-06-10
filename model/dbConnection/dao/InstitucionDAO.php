<?php

require_once 'DAO.php';
require_once 'model/Institucion.php';

class institucionDAO implements DataAccessObject {
    
    public function create($institucion) {
        $connection = DataBase::getConnection();

        $sql  = "INSERT INTO institucion(nomInst,dirInst,telInst,cp,nomRep,cargo,tipoInst,ideTrib) ";
        $sql .= "VALUES (:nomInst,:dirInst,:telInst,:cp,:nomRep,:cargo,:tipoInst,:ideTrib)";

        $statement = $connection->prepare($sql);
        $statement->execute([
            "nomInst"  => $institucion->getNomInst(),
            "dirInst" => $institucion->getDirInst(),
            "telInst" => $institucion->getTelInst(),
            "cp" => $institucion->getCP(),
            "nomRep" => $institucion->getNomRep(),
            "cargo" => $institucion->getCargo(),
            "tipoInst" => $institucion->getTipoInst(),
            "ideTrib" => $institucion->getIdeTrib()
        ]);
    }

    public function all() {
        $connection = DataBase::getConnection();
        $statement = $connection->prepare("SELECT * FROM institucion");
        $statement->execute();

        $result_set = $statement->fetchAll(PDO::FETCH_ASSOC);

        $instituciones = [];
        foreach ($result_set as $institucion) {
            $new_institucion = new Institucion(
                $institucion['nomInst'],
                $institucion['dirInst'],
                $institucion['telInst'],
                $institucion['cp'],
                $institucion['nomRep'],
                $institucion['cargo'],
                $institucion['tipoInst'],
                $institucion['ideTrib']
            );
            $new_institucion->setID($institucion['id']);
            array_push($instituciones, $new_institucion);
        }

        return $instituciones;
    }

    public function find($id) {
        $connection = DataBase::getConnection();
        $statement = $connection->prepare("SELECT * FROM institucion WHERE id=:id");
        $statement->execute(["id" => $id]);

        $result_set = $statement->fetchAll(PDO::FETCH_ASSOC);

        $instituciones = [];
        foreach ($result_set as $institucion) {
            $new_institucion = new Institucion(
                $institucion['nomInst'],
                $institucion['dirInst'],
                $institucion['telInst'],
                $institucion['cp'],
                $institucion['nomRep'],
                $institucion['cargo'],
                $institucion['tipoInst'],
                $institucion['ideTrib']
            );
            $new_institucion->setID($institucion['id']);
            array_push($instituciones, $new_institucion);
        }

        return $instituciones;
    }
    
    public function update($institucion) {
        $connection = DataBase::getConnection();

        $sql  = "UPDATE institucion ";
        $sql .= "SET nomInst=:nomInst, dirInst=:dirInst, telInst=:telInst, cp=:cp, nomRep=:nomRep, cargo=:cargo, tipoInst=:tipoInst, ideTrib=:ideTrib ";
        $sql .= "WHERE id=:id";
        
        $statement = $connection->prepare($sql);
        $statement->execute([
            "id" => $institucion->getID(),
            "nomInst"  => $institucion->getNomInst(),
            "dirInst" => $institucion->getDirInst(),
            "telInst" => $institucion->getTelInst(),
            "cp" => $institucion->getCP(),
            "nomRep" => $institucion->getNomRep(),
            "cargo" => $institucion->getCargo(),
            "tipoInst" => $institucion->getTipoInst(),
            "ideTrib" => $institucion->getIdeTrib()
        ]);
    }
}