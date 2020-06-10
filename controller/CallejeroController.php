<?php

require_once 'auth/Auth.php';
require_once 'model/dbConnection/dao/CallejeroDAO.php';

class CallejeroController {

	private $auth;
	private $callejeroDao;
	private $canino;

	public function __construct() {
		$this->auth = new Auth();
		$this->auth->needLogin();
		$this->callejeroDao = new CallejeroDAO();
	}

	public function showAll() {
		$this->caninos = $this->callejeroDao->all();
		$search = false; 
		require_once 'views/usser/consultaCallejero.php';
	}

	public function showAll2() {
		$this->caninos = $this->callejeroDao->all();
		$search = false; 
		require_once 'views/usser/adoptarCallejero.php';
	}

	public function showRegisterCallejero() {
		$canino = new Callejero(null, null, null, null); 
		require_once 'views/usser/addCallejero.php';
	}

	public function addNewCallejero(
		$calleCan,
		$colCan,
		$rasCan,
		$condCan
	) {
		if(empty($calleCan) || 
		   empty($colCan) || 
		   empty($rasCan) ||
		   empty($condCan)
		) {
			echo"<script type='text/javascript'>
    			alert('Todos los campos deben de ser llenados');
    			window.location.href='./bienvenido.php';
    			</script>";
		}

		$canino = new Callejero(
			$calleCan,
			$colCan,
			$rasCan,
			$condCan
		);
		$this->callejeroDao->create($canino);
		echo"<script type='text/javascript'>
    		alert('El canino ha sido registrado');
    		window.location.href='./addCallejero.php';
    		</script>";
	}

	public function deleteCallejero($id) {
		$this->canino = $this->callejeroDao->find($id);
		$canino = $this->canino[0];
		$this->callejeroDao->delete($canino);
		echo"<script type='text/javascript'>
    		alert('El canino ha sido adoptado, favor de registrar a su nueva MASCOTA');
    		window.location.href='./bienvenida.php';
    		</script>";	
	}
}