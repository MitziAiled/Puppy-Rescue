<html>
    <head>
        <title>Puppy Rescue: Registro de Callejero</title>
        <link href="../assets/css/registro_callejero.css" rel="stylesheet" type="text/css">
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
        <div id="rectangle">
            <form action="./add-canino" method="POST">
                <label>Calle:</label>
                <input type="text" name="calleCan" required/>
                <br>
                <label>Colonia:</label>
                <input type="text" name="colCan" required/>
                <br>
                <label>Rasgos F&iacute;sicos:</label>
                <input type="text" name="rasCan" required/>
                <br>
                <label>Condición del canino:</label>
                <input type="text" name="condCan" required/>
                <br>
                <button type="submit" id="enviar_formulario">REGISTRAR</button>
            </form>
        </div>

    </body>
</html>