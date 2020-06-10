<?php

require_once 'auth/Auth.php';
require_once 'model/dbConnection/dao/InstitucionDAO.php';

class InstitucionController {

	private $auth;
	private $institucionDao;
	private $institucion;

	public function __construct() {
		$this->auth = new Auth();
		$this->auth->needLogin();
		$this->institucionDao = new institucionDao();
	}

	public function showAll() {
		$this->institucion = $this->institucionDao->all();
		$search = false; 
		require_once 'views/usser/consultaInstitucion.php';
	}

	public function showAll2() {
		$this->institucion = $this->institucionDao->all();
		$search = false; 
		require_once 'views/usser/modificarInstitucion.php';
	}

	public function showRegisterInstitucion() {
		$institucion = new Institucion(null, null, null, null, null, null, null, null); 
		require_once 'views/usser/addInstitucion.php';
	}

	public function addNewInstitucion(
        $nomInst,
        $dirInst,
        $telInst,
        $cp,
        $nomRep,
        $cargo,
        $tipoInst,
        $ideTrib
	) {
		if(empty($nomInst) || 
		   empty($dirInst) || 
           empty($telInst) ||
           empty($cp) ||
           empty($nomRep) ||
           empty($cargo) ||
           empty($tipoInst) ||
           empty($ideTrib) 
		) {
			echo"<script type='text/javascript'>
    			alert('Todos los campos deben de ser llenados');
    			window.location.href='./addInstitucion.php';
    			</script>";
		}

		$institucion = new Institucion(
			$nomInst,
            $dirInst,
            $telInst,
            $cp,
            $nomRep,
            $cargo,
            $tipoInst,
            $ideTrib
		);
		$this->institucionDao->create($institucion);
		echo"<script type='text/javascript'>
    		alert('La institucion ha sido registrada correctamente');
    		window.location.href='./bienvenida.php';
    		</script>";
	}


	public function showModifyInstitucion($id) {
		$this->institucion = $this->institucionDao->find($id);
		$institucion = $this->institucion[0];
		require_once 'views/usser/addInstitucion.php';
	}

	public function updateInstitucion(
		$id,
		$nomInst,
		$dirInst,
		$telInst,
		$cp,
		$nomRep,
		$cargo,
		$tipoInst,
		$ideTrib
	) {
		if(empty($nomInst) || 
		   empty($dirInst) || 
           empty($telInst) ||
           empty($cp) ||
           empty($nomRep) ||
           empty($cargo) ||
           empty($tipoInst) ||
           empty($ideTrib) 
		) {
			echo"<script type='text/javascript'>
    			alert('Todos los campos deben de ser llenados');
    			window.location.href='./bienvenida.php';
    			</script>";
		}

		$institucion = new Institucion(
			$nomInst,
            $dirInst,
            $telInst,
            $cp,
            $nomRep,
            $cargo,
            $tipoInst,
            $ideTrib
		);
		$institucion->setID($id);

		$this->institucionDao->update($institucion);
		echo"<script type='text/javascript'>
    		alert('Los datos de la institucion han sido modificados');
    		window.location.href='./bienvenida.php';
    		</script>";
	}
}