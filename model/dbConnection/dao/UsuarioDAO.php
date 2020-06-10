<?php

require_once 'LoginDAO.php';
require_once 'model/Usuario.php';

class UsuarioDAO implements DataAccessObject {
    public function create($usser) {
        $connection = DataBase::getConnection();

        $sql  = "INSERT INTO usuario(nomUs,passUs) ";
        $sql .= "VALUES (:nomUs,:passUs)";

        $statement = $connection->prepare($sql);
        $statement->execute([
            "nomUs"  => $usser->getName(),
            "passUs" => $usser->getPassword()
        ]);
    }

    public function all()
    {
        $connection = DataBase::getConnection();
        $statement = $connection->prepare("SELECT * FROM usuario");
        $statement->execute();

        $result_set = $statement->fetchAll(PDO::FETCH_ASSOC);

        $ussers = [];
        foreach ($result_set as $ussers) {
            $new_usser = new Usuario(
                $ussers['nomUs'],
                $ussers['passUs']
            );
            $new_usser->setID($ussers['id']);
            array_push($ussers, $new_usser);
        }

        return $ussers;
    }

    public function find($id)
    {
        $connection = DataBase::getConnection();
        $statement = $connection->prepare("SELECT * FROM usuario WHERE id=:id");
        $statement->execute(["id" => $id]);

        $result_set = $statement->fetchAll(PDO::FETCH_ASSOC);

        if(!$result_set)
            return null;
        
        $usser = new Usuario(
            $result_set[0]['nomUs'],
            $result_set[0]['passUs']
        );
        $usser->setID($result_set[0]['id']);
        return $usser;
    }

    public function findNomUs($nomUs) {
        $connection = DataBase::getConnection();
        $statement = $connection->prepare("SELECT * FROM usuario WHERE nomUs=:nomUs");
        $statement->execute(["nomUs" => $nomUs]);

        $result_set = $statement->fetchAll(PDO::FETCH_ASSOC);

        if(!$result_set)
            return null;
        
        $usser = new Usuario(
            $result_set[0]['nomUs'],
            $result_set[0]['passUs']
        );
        $usser->setID($result_set[0]['id']);

        return $usser;
    }

    public function update($usser) {
        $connection = DataBase::getConnection();

        $sql  = "UPDATE usuario ";
        $sql .= "SET nomUs=:nomUs, passUs=:passUs";
        $sql .= "WHERE id=:id";

        $statement = $connection->prepare($sql);
        $statement->execute([
            "id" => $usser->getID(),
            "nomUs" => $usser->getName(),
            "passUs" => $usser->getPassword()
        ]);
    }

    public function delete($usser) {
        $connection = DataBase::getConnection();
        $statement = $connection->prepare("DELETE FROM usuario WHERE id=:id");
        $statement->execute([
            "id" => $usser->getID()
        ]);
    }
}