<?php
require_once 'DAO.php';

interface LoginDAO extends DataAccessObject {
    function findNomUs($nomUs);
}