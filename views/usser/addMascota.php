<html>
    <head>
        <title>Puppy Rescue: Registro de Mascota</title>
        <link href="../assets/css/registro_mascota.css" rel="stylesheet" type="text/css">
        <LINK href="../assets/css/menu.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript">
			function confirmLogout() {
				if(confirm('¿Deseas cerrar sesion?')) {
					return true;
				}
				else {
					return false;
				}
			}

		</script>
    </head>
    <body>
    <div id="menu">
			<ul class="nav">
                <li><a href="">MASCOTA</a>
                    <ul>
						<li><form action="./registrarMascota"><button>Registrar</button></form></li>
						<li><form action="./consultaMascota3"><button>Modificar Datos</button></form></li>
						<li><form action="./consultaMascota" ><button>Consultar</button></form></li>
						<li><form action="./consultaMascota2"><button>Eliminar</button></form></li>
					</ul>
                </li>
                <li><a href="">CALLEJERO</a>
                    <ul>
						<li><form action="./registrarCallejero"><button>Registrar</button></form></li>
						<li><form action="./consultaCallejero"> <button>Consultar</button></form></li>
						<li><form action="./consultaCallejero2"><button>Adoptar</button></form></li>
					</ul>
                </li>
				<li><a href="">INSTITUCI&Oacute;N</a>
                    <ul>
                        <li><form action="./consultaInstitucion"><button>Consultar</button></form></li>
						<li><form action="./registrarInstitucion"><button>Registrar</button></form></li>
						<li><form action="./consultaInstitucion2"><button>Modificar Datos</button></form></li>
					</ul>
                </li>
				<li>
                    <form action="./logout" method="POST">
						<button type="submit" value="Log out" onclick="return confirmLogout()">Cerrar Sesion</button>
					</form>
                    <!--form action="./logout"><button><a href="">CERRAR SESI&Oacute;N</a></button></form-->
                </li>
			</ul>
		</div>
        <div id="rectangle1">
        <form action="
				<?php 
				if($mascota->getID() == null) {
					echo './add-mascota';
				} 
				else {
					echo './updateMascota';
				}
				?>" 
                method="POST">
                <label>Nombre:</label>
                <input type="hidden" name="id" value="<?= $mascota->getID(); ?>">
                <input type="text" name="nomMas" id="nombre_mas" value="<?= $mascota->getNomMas(); ?>"/>
                <br>
                <label>Raza:</label>
                <input type="text" name="raza" id="raza" value="<?= $mascota->getRaza(); ?>" />
                <br>
                <label>Color:</label>
                <input type="text" name="color" id="color" value="<?= $mascota->getColor(); ?>"/>
                <br>
                <label>Edad:</label>
                <input type="text" name="edad" id="edad" value="<?= $mascota->getEdad(); ?>"/>
                <br>
                <label>Tamaño:</label>
                <input type="text" name="tamano" id="tamano" value="<?= $mascota->getTamano(); ?>"/>
                <br>
                <label>Esterilización:</label>
                <input type="text" name="esterilizacion" id="esterilizacion" value="<?= $mascota->getEsterilizacion(); ?>"/>
                <br>
                <label>Condicion Médica:</label>
                <input type="text" name="condicion" id="condicion" value="<?= $mascota->getCondicion(); ?>"/>
                <br>
                <label>Rasgo físico característico:</label>
                <input type="text" name="rasgo" id="rasgo_caracteristico" value="<?= $mascota->getRasgo(); ?>"/>
        </div>
        <div id="rectangle2">
                <label>Dueño:</label>
                <input type="text" name="dueno" id="dueno" value="<?= $mascota->getDueno(); ?>"/>
                <br>
                <label>Dirección:</label>
                <input type="text" name="direccion" id="direccion" value="<?= $mascota->getDireccion(); ?>"/>
                <br>
                <label>Teléfono:</label>
                <input type="text" name="telefono" id="telefono" value="<?= $mascota->getTelefono(); ?>"/>
        </div>
                <input id="enviar_formulario" type="submit" value="Enviar Datos"/>
    </form>
    </body>
</html>