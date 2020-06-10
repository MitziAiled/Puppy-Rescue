<html>
    <head>
        <title>Puppy Rescue: Registro de Usuario</title>
        <link href="../views/assets/css/registro_usuario.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="rectangle">
            <form action="./registro_usuario/create-account" method="POST">
                <label>Nombre de Usuario:</label>
                <input type="text" name="nomUs" autocomplete="off" required/>
                <br>
                <label>Password:</label>
                <input type="text" name="passUs" autocomplete="off" required/>
                <button type="submit" id="enviar_formulario">REGISTRAR</button>
            </form>
            <button id="volver">
                <a href="../">Volver</a>
            </button>
        </div>
    </body>
</html>