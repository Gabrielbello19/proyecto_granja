<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Granjas BFV</title>
        <link rel="stylesheet" href="vista/css/menu.css">
        <script src="vista/js/login.js"></script>
    </head>
    <body>
        <div class="contenedor">
            <form action="sesion.php?q=login_user" method='post'>
                <h1>Iniciar Sesión.</h1>
                <input class="input-usuario" type="text" name="usuario" placeholder="Usuario."  requiretd> 
              
                <input class="input-usuario" type="password" name="contraseña" placeholder="Contraseña." required> 
                <input class="boton-enviar" type="submit" value="Entrar">
            </form>
            <a class="enlace" href="sesion.php?q=register">> No estas registrado?, regístrate.</a>
        </div>
    </body> 
</html>
