<html>
    <head>
        <title>Puppy Rescue: Eliminar Mascotas</title>
        <link href="../assets/css/modificar_mascota.css" rel="stylesheet" type="text/css">
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
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Raza</th>
                    <th>Color</th>
                    <th>Edad</th>
                    <th>Tamaño</th>
                    <th>Esterilización</th>
                    <th>Condición Médica</th>
                    <th>Rasgo Físico</th>
                    <th>Nombre del Dueño</th>
                    <th>Teléfono</th>
                    <th>Dirección</th>
                    <th>Opción</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($this->mascota as $mascota) { ?>
                <tr>
                  <td><?php echo $mascota->getID(); ?></td>
                  <td><?php echo $mascota->getNomMas(); ?></td>
                  <td><?php echo $mascota->getRaza(); ?></td>
                  <td><?php echo $mascota->getColor(); ?></td>
                  <td><?php echo $mascota->getEdad(); ?></td>
                  <td><?php echo $mascota->getTamano(); ?></td>
                  <td><?php echo $mascota->getEsterilizacion(); ?></td>
                  <td><?php echo $mascota->getCondicion(); ?></td>
                  <td><?php echo $mascota->getRasgo(); ?></td>
                  <td><?php echo $mascota->getDueno(); ?></td>
                  <td><?php echo $mascota->getDireccion(); ?></td>
                  <td><?php echo $mascota->getTelefono(); ?></td>
                  <td><form action="./actualizarMascota" method="POST">
						<input type="submit" name="edit<?= $mascota->getID(); ?>" value="Editar">
						<input type="hidden" name="id" value="<?= $mascota->getID(); ?>">
					    </form>
                  </td>
                </tr>
              <?php } ?> 
            </tbody>
        </table>
    </body>
</html>