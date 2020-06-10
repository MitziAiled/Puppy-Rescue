<html>
    <head>
        <title>Puppy Rescue: Eliminar Mascotas</title>
        <link href="../assets/css/eliminar_mascota.css" rel="stylesheet" type="text/css">
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
    <script type="text/javascript">
    function confirmDelete() {
				if(confirm('Estas seguro de que deseas eliminarlo?')) {
					return true;
				}
				else {
					return false;
				}
			}
</script>
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
                </li>
			</ul>
		</div>
        <table>
            <thead>
                <tr>
                    <th>ID</id>
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
            <?php foreach ($this->mascota as $m) { ?>
                <tr>
                  <td><?php echo $m->getID(); ?></td>
                  <td><?php echo $m->getNomMas(); ?></td>
                  <td><?php echo $m->getRaza(); ?></td>
                  <td><?php echo $m->getColor(); ?></td>
                  <td><?php echo $m->getEdad(); ?></td>
                  <td><?php echo $m->getTamano(); ?></td>
                  <td><?php echo $m->getEsterilizacion(); ?></td>
                  <td><?php echo $m->getCondicion(); ?></td>
                  <td><?php echo $m->getRasgo(); ?></td>
                  <td><?php echo $m->getDueno(); ?></td>
                  <td><?php echo $m->getDireccion(); ?></td>
                  <td><?php echo $m->getTelefono(); ?></td>
                  <td><form action="./eliminarMascota">
						<input type="submit" value="Eliminar" onclick="return confirmDelete()">
						<input type="hidden" name="id" value="<?= $m->getID(); ?>">
					    </form>
                  </td>
                </tr>
              <?php } ?> 
            </tbody>
        </table>
    </body>
</html>