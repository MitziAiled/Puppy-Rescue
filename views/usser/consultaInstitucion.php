<html>
    <head>
        <title>Puppy Rescue: Consulta de Mascotas</title>
        <link href="../assets/css/consulta_institucion.css" rel="stylesheet" type="text/css">
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
                    <th>Dirección</th>
                    <th>Teléfono</th>
                    <th>CP</th>
                    <th>Nombre Representante</th>
                    <th>Cargo Representante</th>
                    <th>Tipo de Institución</th>
                    <th>Identificación Tributaria</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($this->institucion as $i) { ?>
                <tr>
                  <td><?php echo $i->getID(); ?></td>
                  <td><?php echo $i->getNomInst(); ?></td>
                  <td><?php echo $i->getDirInst(); ?></td>
                  <td><?php echo $i->getTelInst(); ?></td>
                  <td><?php echo $i->getCP(); ?></td>
                  <td><?php echo $i->getNomRep(); ?></td>
                  <td><?php echo $i->getCargo(); ?></td>
                  <td><?php echo $i->getTipoInst(); ?></td>
                  <td><?php echo $i->getIdeTrib(); ?></td>
                </tr>
              <?php } ?> 
            </tbody>
        </table>
    </body>
</html>