<?php

require_once 'DAO.php';
require_once 'model/Mascota.php';

class MascotaDAO implements DataAccessObject {
    
    public function create($mascota) {
        $connection = DataBase::getConnection();

        $sql  = "INSERT INTO mascota(nomMas,raza,color,edad,tamano,esterilizacion,condicion,rasgo,dueno,direccion,telefono) ";
        $sql .= "VALUES (:nomMas,:raza,:color,:edad,:tamano,:esterilizacion,:condicion,:rasgo,:dueno,:direccion,:telefono)";

        $statement = $connection->prepare($sql);
        $statement->execute([
            "nomMas"  => $mascota->getNomMas(),
            "raza" => $mascota->getRaza(),
            "color" => $mascota->getColor(),
            "edad" => $mascota->getEdad(),
            "tamano" => $mascota->getTamano(),
            "esterilizacion" => $mascota->getEsterilizacion(),
            "condicion" => $mascota->getCondicion(),
            "rasgo" => $mascota->getRasgo(),
            "dueno" => $mascota->getDueno(),
            "direccion" => $mascota->getDireccion(),
            "telefono" => $mascota->getTelefono(),
        ]);
    }

    public function all() {
        $connection = DataBase::getConnection();
        $statement = $connection->prepare("SELECT * FROM mascota");
        $statement->execute();

        $result_set = $statement->fetchAll(PDO::FETCH_ASSOC);

        $mascotas = [];
        foreach ($result_set as $mascota) {
            $new_mascota = new Mascota(
                $mascota['nomMas'],
                $mascota['raza'],
                $mascota['color'],
                $mascota['edad'],
                $mascota['tamano'],
                $mascota['esterilizacion'],
                $mascota['condicion'],
                $mascota['rasgo'],
                $mascota['dueno'],
                $mascota['direccion'],
                $mascota['telefono']
            );
            $new_mascota->setID($mascota['id']);
            array_push($mascotas, $new_mascota);
        }

        return $mascotas;
    }

    public function find($id) {
        $connection = DataBase::getConnection();
        $statement = $connection->prepare("SELECT * FROM mascota WHERE id=:id");
        $statement->execute(["id" => $id]);

        $result_set = $statement->fetchAll(PDO::FETCH_ASSOC);

        $mascotas = [];
        foreach ($result_set as $mascota) {
            $new_mascota = new Mascota(
                $mascota['nomMas'],
                $mascota['raza'],
                $mascota['color'],
                $mascota['edad'],
                $mascota['tamano'],
                $mascota['esterilizacion'],
                $mascota['condicion'],
                $mascota['rasgo'],
                $mascota['dueno'],
                $mascota['direccion'],
                $mascota['telefono']
            );
            $new_mascota->setID($mascota['id']);
            array_push($mascotas, $new_mascota);
        }

        return $mascotas;
    }
    
    public function update($mascota) {
        $connection = DataBase::getConnection();

        $sql  = "UPDATE mascota ";
        $sql .= "SET nomMas=:nomMas, raza=:raza, color=:color, edad=:edad, tamano=:tamano, esterilizacion=:esterilizacion, condicion=:condicion, rasgo=:rasgo, dueno=:dueno, direccion=:direccion, telefono=:telefono ";
        $sql .= "WHERE id=:id";

        $statement = $connection->prepare($sql);
        $statement->execute([
            "id" => $mascota->getID(),
            "nomMas"  => $mascota->getNomMas(),
            "raza" => $mascota->getRaza(),
            "color" => $mascota->getColor(),
            "edad" => $mascota->getEdad(),
            "tamano" => $mascota->getTamano(),
            "esterilizacion" => $mascota->getEsterilizacion(),
            "condicion" => $mascota->getCondicion(),
            "rasgo" => $mascota->getRasgo(),
            "dueno" => $mascota->getDueno(),
            "direccion" => $mascota->getDireccion(),
            "telefono" => $mascota->getTelefono()
        ]);
    }

    public function delete($mascota) {
        $connection = DataBase::getConnection();
        $statement = $connection->prepare("DELETE FROM mascota WHERE id=:id");
        $statement->execute([
            "id" => $mascota->getID()
        ]);
    }
}