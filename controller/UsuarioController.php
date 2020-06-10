<?php

require_once 'auth/Auth.php';
require_once 'model/dbConnection/dao/UsuarioDAO.php';

class UsuarioController {

	private $auth;
	private $usuarioDao;

	public function __construct() {
		$this->auth = new Auth();
		$this->usuarioDao = new UsuarioDAO();
	}

	public function authUsuario(
		$nomUs, 
		$passUs
	) {
		if (empty($nomUs) || empty($passUs)) {
			echo"<script type='text/javascript'>
    			alert('Todos los campos deben de ser llenados');
    			window.location.href='/PAPANTLADAE8/';
    			</script>";
		}

		$usser = $this->usuarioDao->findNomus($nomUs);

		if(empty($usser)) {
			echo"<script type='text/javascript'>
    			alert('Usuario o contraseña incorrecta');
    			window.location.href='/PAPANTLADAE8/';
    			</script>";
		}
		else if($usser->getPassword() == $passUs) {
			session_start();
			$_SESSION['usser'] = $usser->getName();
			header ('Location: /PAPANTLADAE8/views/usser/bienvenida.php');
		}
		else {
			echo"<script type='text/javascript'>
    			alert('Usuario o contraseña incorrecta');
    			window.location.href='/PAPANTLADAE8';
    			</script>";
		}

	}

	public function logout(){
		@session_start();
        unset($_SESSION['usser']);
        header("Location: /PAPANTLADAE8/");
	}

	public function createAccount(
		$nomUs,
		$passUs
	) {
		if(empty($nomUs) || empty($passUs)){
			echo"<script type='text/javascript'>
    			alert('Todos los campos deben de ser llenados);
    			window.location.href='views/registro_usuario.php;
    			</script>";
		}

		$usser = new Usuario (
			$nomUs,
			$passUs
		);
		$this->usuarioDao->create($usser);
		echo"<script type='text/javascript'>
			alert('La cuenta ha sido registrada correctamente');
    		window.location.href='/PAPANTLADAE8/';
    		</script>";
	}

	public function showLogin() {
		$this->auth->afterLogin();
		require_once 'views/login.php';
	}

	public function showRegister() {
		require_once 'views/registro_usuario.php';
	}
}