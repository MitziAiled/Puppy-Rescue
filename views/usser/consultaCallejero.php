<html>
    <head>
        <title>Puppy Rescue: Consulta de Callejeros</title>
        <link href="../assets/css/consulta_callejero.css" rel="stylesheet" type="text/css">
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
                    <th>Calle</th>
                    <th>Colonia</th>
                    <th>Rasgos F&iacute;sicos</th>
                    <th>Condici&oacute;n del canino</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($this->caninos as $canino) { ?>
                <tr>
                  <td><?php echo $canino->getID(); ?></td>  
                  <td><?php echo $canino->getCalle(); ?></td>
                  <td><?php echo $canino->getColonia(); ?></td>
                  <td><?php echo $canino->getRasgo(); ?></td>
                  <td><?php echo $canino->getCondicion(); ?></td>
                </tr>
              <?php } ?> 
            </tbody>
        </table>
    </body>
</html>