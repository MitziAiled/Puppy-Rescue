<html>
    <head>
        <title>Puppy Rescue</title>
        <LINK href="views/assets/css/styles.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
    <form action="./login/authenticate" method="POST">
        <div id="rectangle">
            <label>
                USUARIO:
            </label>
            <br><br>
            <input type="text" name="nomUs" placeholder="Nombre de Usuario"/>
            <br><br>
            <label>
                CONTRASEÑA:
            </label>
            <br><br>
            <input type="password" name="passUs" placeholder="Contraseña"/>
            <br><br>
            <button type="submit" name="ingresar">
                INGRESAR
            </button>
            <label id="crear_usuario">
                ¿NO TIENES UNA CUENTA?
                <a href="views/registro_usuario.php">
                    CREA UNA.
                </a>
            </label>
        </div>
    </form>   
    </body>
</html>