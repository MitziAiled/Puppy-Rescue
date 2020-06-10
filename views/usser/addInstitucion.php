<html>
    <head>
        <title>Puppy Rescue: Registro de Mascota</title>
        <link href="../assets/css/registro_institucion.css" rel="stylesheet" type="text/css">
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
				if($institucion->getID() == null) {
					echo './add-institucion';
				} 
				else {
					echo './updateInstitucion';
				}
				?>" 
                method="POST">
                <label>INSTITUCIÓN:</label>
                <br><br>
                <label>Nombre:</label>
                <input type="hidden" name="id" value="<?= $institucion->getID(); ?>">
                <input type="text" name="nomInst" id="nombre" value="<?= $institucion->getNomInst(); ?>"/>
                <br>
                <label>Dirección:</label>
                <input type="text" name="dirInst" id="direccion" value="<?= $institucion->getDirInst(); ?>"/>
                <br>
                <label>Teléfono:</label>
                <input type="text" name="telInst" id="telefono" value="<?= $institucion->getTelInst(); ?>"/>
                <br>
                <label>Código Postal:</label>
                <input type="text" name="cp" id="cp" value="<?= $institucion->getCP(); ?>"/>
        </div>
        <div id="rectangle2">
                <label>REPRESENTANTE:</label>
                <br><br>
                <label>Nombre Completo:</label>
                <input type="text" name="nomRep" id="nombre" value="<?= $institucion->getNomRep(); ?>"/>
                <br>
                <label>Cargo:</label>
                <input type="text" name="cargo" id="Cargo" value="<?= $institucion->getCargo(); ?>"/>
                <br>
                <label>Tipo de Institución:</label>
                <input type="text" name="tipoInst" id="TipoInst" value="<?= $institucion->getTipoInst(); ?>"/>
                <br>
                <label>Ident. Tributaria:</label>
                <input type="text" name="ideTrib" id="IdTrib" value="<?= $institucion->getIdeTrib(); ?>"/>
        </div>
                <input id="enviar_formulario" type="submit" value="Enviar Datos"/>
            </form>
    </body>
</html>