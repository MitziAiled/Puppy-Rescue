<?php

require_once 'auth/Auth.php';
require_once 'model/dbConnection/dao/MascotaDAO.php';

class MascotaController {

	private $auth;
	private $mascotaDao;
	private $mascota;

	public function __construct() {
		$this->auth = new Auth();
		$this->auth->needLogin();
		$this->mascotaDao = new MascotaDao();
	}

	public function showAll() {
		$this->mascota = $this->mascotaDao->all();
		$search = false; 
		require_once 'views/usser/consultaMascota.php';
	}

	public function showAll2() {
		$this->mascota = $this->mascotaDao->all();
		$search = false; 
		require_once 'views/usser/eliminarMascota.php';
	}

	public function showAll3() {
		$this->mascota = $this->mascotaDao->all();
		$search = false; 
		require_once 'views/usser/modificarMascota.php';
	}

	public function showRegisterMascota() {
		$mascota = new Mascota(null, null, null, null, null, null, null, null, null, null, null); 
		require_once 'views/usser/addMascota.php';
	}

	public function addNewMascota(
        $nomMas,
        $raza,
        $color,
        $edad,
        $tamano,
        $esterilizacion,
        $condicion,
        $rasgo,
        $dueno,
        $direccion,
        $telefono
	) {
		if(empty($nomMas) || 
		   empty($raza) || 
           empty($color) ||
           empty($edad) ||
           empty($tamano) ||
           empty($esterilizacion) ||
           empty($condicion) ||
           empty($rasgo) ||
           empty($dueno) ||
           empty($direccion) ||
		   empty($telefono)
		) {
			echo"<script type='text/javascript'>
    			alert('Todos los campos deben de ser llenados');
    			window.location.href='./bienvenida.php';
    			</script>";
		}

		$mascota = new Mascota(
			$nomMas,
            $raza,
            $color,
            $edad,
            $tamano,
            $esterilizacion,
            $condicion,
            $rasgo,
            $dueno,
            $direccion,
            $telefono
		);
		$this->mascotaDao->create($mascota);
		echo"<script type='text/javascript'>
    		alert('La mascota ha sido registrada correctamente');
    		window.location.href='./bienvenida.php';
    		</script>";
	}

	public function showModifyMascota($id) {
		$this->mascota = $this->mascotaDao->find($id);
		$mascota = $this->mascota[0];
		require_once 'views/usser/addMascota.php';
	}

	public function updateMascota(
		$id,
		$nomMas, 
        $raza, 
        $color, 
        $edad, 
        $tamano, 
        $esterilizacion, 
        $condicion, 
        $rasgo, 
        $dueno, 
        $direccion, 
        $telefono
	) {
		if(empty($nomMas) || 
		empty($raza) || 
		empty($color) ||
		empty($edad) ||
		empty($tamano) ||
		empty($esterilizacion) ||
		empty($condicion) ||
		empty($rasgo) ||
		empty($dueno) ||
		empty($direccion) ||
		empty($telefono)
		) {
			echo"<script type='text/javascript'>
    			alert('Todos los campos deben de ser llenados');
    			window.location.href='./actualizarMascota.php';
    			</script>";
		}

		$mascota = new Mascota(
			$nomMas, 
			$raza, 
			$color, 
			$edad, 
			$tamano, 
			$esterilizacion, 
			$condicion, 
			$rasgo, 
			$dueno, 
			$direccion, 
			$telefono
		);
		$mascota->setID($id);

		$this->mascotaDao->update($mascota);
		echo"<script type='text/javascript'>
    		alert('Los datos de la mascota han sido modificados');
    		window.location.href='./bienvenida.php';
    		</script>";
	}

	public function deleteMascota($id) {
		$this->mascota = $this->mascotaDao->find($id);
		$mascota = $this->mascota[0];
		$this->mascotaDao->delete($mascota);
		echo"<script type='text/javascript'>
    		alert('La mascota ha muerto');
    		window.location.href='./bienvenida.php';
    		</script>";	
	}
}