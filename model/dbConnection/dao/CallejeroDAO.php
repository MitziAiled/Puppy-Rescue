<?php

require_once 'DAO.php';
require_once 'model/Callejero.php';

class CallejeroDAO implements DataAccessObject {
    
    public function create($canino) {
        $connection = DataBase::getConnection();

        $sql  = "INSERT INTO canino(calleCan,colCan,rasCan,condCan) ";
        $sql .= "VALUES (:calleCan,:colCan,:rasCan,:condCan)";

        $statement = $connection->prepare($sql);
        $statement->execute([
            "calleCan"  => $canino->getCalle(),
            "colCan" => $canino->getColonia(),
            "rasCan" => $canino->getRasgo(),
            "condCan" => $canino->getCondicion()]);
    }

    public function all() {
        $connection = DataBase::getConnection();
        $statement = $connection->prepare("SELECT * FROM canino");
        $statement->execute();

        $result_set = $statement->fetchAll(PDO::FETCH_ASSOC);

        $caninos = [];
        foreach ($result_set as $canino) {
            $new_callejero = new Callejero(
                $canino['calleCan'],
                $canino['colCan'],
                $canino['rasCan'],
                $canino['condCan']
            );
            $new_callejero->setID($canino['id']);
            array_push($caninos, $new_callejero);
        }

        return $caninos;
    }

    public function find($id) {
        $connection = DataBase::getConnection();
        $statement = $connection->prepare("SELECT * FROM canino WHERE id=:id");
        $statement->execute(["id" => $id]);

        $result_set = $statement->fetchAll(PDO::FETCH_ASSOC);

        $caninos = [];
        foreach ($result_set as $canino) {
            $new_callejero = new Callejero(
                $canino['id'],
                $canino['calleCan'],
                $canino['colCan'],
                $canino['rasCan'],
                $canino['condCan']
            );
            $new_callejero->setID($canino['id']);
            array_push($caninos, $new_callejero);
        }

        return $caninos;
    }

    public function delete($canino) {
        $connection = DataBase::getConnection();
        $statement = $connection->prepare("DELETE FROM canino WHERE id=:id");
        $statement->execute([
            "id" => $canino->getID()
        ]);
    }
}