<?php

require_once 'model/dbConnection/connection.php';

interface DataAccessObject {
    //function all();
    function find($idUs);
    //function delete($id);
    //function update($entity);
    function create($entity);
}