<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="<?php echo FRONT_ROOT ?>Usuario/loguear">

        <input type="email" name="user" placeholder="Usuario" />
        <input type="password" name="pass" placeholder="Contraseña" />
        <input type="submit" name="enviar" />
    </form>
</body>
</html>