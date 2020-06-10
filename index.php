<?php

require_once 'controller/UsuarioController.php';
require_once 'controller/CallejeroController.php';
require_once 'controller/MascotaController.php';
require_once 'controller/InstitucionController.php';

if(isset($_SERVER['PATH_INFO'])) {
	$url = $_SERVER['PATH_INFO'];
}
else {
	$url = '/';
}

switch ($url) {
	case '/':
	case '/login':
		$controller = new UsuarioController();
		$controller->showLogin();
		break;
	
	case '/login/authenticate':
		$controller = new UsuarioController();
		$controller->authUsuario(
			form('nomUs'),
			form('passUs')
		);
		break;

	case '/regitro_usuario':
		$controller = new UsuarioController();
		$controller->showRegister();
		break;

	case '/views/registro_usuario/create-account':
		$controller = new UsuarioController();
		$controller->createAccount(
			form('nomUs'),
			form('passUs')
		);
		break;

	case '/views/usser/logout':
		$controller = new UsuarioController();
		$controller->logout();
		break;	

	case '/views/usser/registrarMascota':
		$controller = new MascotaController();
		$controller->showRegisterMascota();
		break;

	case '/views/usser/add-mascota':
		$controller = new MascotaController();
		$controller->addNewMascota(
			form('nomMas'),
			form('raza'),
			form('color'),
			form('edad'),
			form('tamano'),
			form('esterilizacion'),
			form('condicion'),
			form('rasgo'),
			form('dueno'),
			form('direccion'),
			form('telefono')
		);
		break;

	case '/views/usser/consultaMascota':
		$controller = new MascotaController();
		$controller->showAll();
		break;	

	case '/views/usser/consultaMascota2':
		$controller = new MascotaController();
		$controller->showAll2();
		break;		

	case '/views/usser/consultaMascota3':
		$controller = new MascotaController();
		$controller->showAll3();
		break;	

	case '/views/usser/actualizarMascota':
		$controller = new MascotaController();
		$controller->showModifyMascota(form('id'));
		break;

	case '/views/usser/updateMascota':
		$controller = new MascotaController();
		$controller->updateMascota(
			form('id'),
			form('nomMas'),
			form('raza'),
			form('color'),
			form('edad'),
			form('tamano'),
			form('esterilizacion'),
			form('condicion'),
			form('rasgo'),
			form('dueno'),
			form('direccion'),
			form('telefono')
		);
		break;

	case '/views/usser/eliminarMascota':
		$controller = new MascotaController();
		$controller->deleteMascota(form('id'));
		break;

	case '/views/usser/registrarCallejero':
		$controller = new CallejeroController();
		$controller->showRegisterCallejero();
		break;
		
	case '/views/usser/add-canino':
		$controller = new CallejeroController();
		$controller->addNewCallejero(
			form('calleCan'),
			form('colCan'),
			form('rasCan'),
			form('condCan')
		);
		break;

	case '/views/usser/consultaCallejero':
		$controller = new CallejeroController();
		$controller->showAll();
		break;	

	case '/views/usser/consultaCallejero2':
		$controller = new CallejeroController();
		$controller->showAll2();
		break;	

	case '/views/usser/adoptarCallejero':
		$controller = new CallejeroController();
		$controller->deleteCallejero(form('id'));
		break;

	case '/views/usser/registrarInstitucion':
		$controller = new InstitucionController();
		$controller->showRegisterInstitucion();
		break;	

	case '/views/usser/add-institucion':
		$controller = new InstitucionController();
		$controller->addNewInstitucion(
			form('nomInst'),
			form('dirInst'),
			form('telInst'),
			form('cp'),
			form('nomRep'),
			form('cargo'),
			form('tipoInst'),
			form('ideTrib')
		);
		break;
	
	case '/views/usser/consultaInstitucion':
		$controller = new InstitucionController();
		$controller->showAll();
		break;
		
	case '/views/usser/consultaInstitucion2':
		$controller = new InstitucionController();
		$controller->showAll2();
		break;

	case '/views/usser/actualizarInstitucion':
		$controller = new InstitucionController();
		$controller->showModifyInstitucion(form('id'));
		break;

	case '/views/usser/updateInstitucion':
		$controller = new InstitucionController();
		$controller->updateInstitucion(
			form('id'),
			form('nomInst'),
			form('dirInst'),
			form('telInst'),
			form('cp'),
			form('nomRep'),
			form('cargo'),
			form('tipoInst'),
			form('ideTrib')
		);
		break;
}

function form($key) {
    if(!isset($_REQUEST[$key])) {
        return null;
    }
    return $_REQUEST[$key];
}