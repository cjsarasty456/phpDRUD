<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Registro CRUD</title>
    </head>
    <body>
        <form action="#" method="post">
            <label for="CampoDocumento">Documento</label>
            <input id="CampoDocumento" name="CampoDocumento"type="text">
            <label for="CampoNombres">Nombres</label>
            <input id="CampoNombres" name="CampoNombres" type="text">
            <label for="CampoApellidos">Apellidos</label>
            <input id="CampoApellidos" name="CampoApellidos" type="text">
            <label for="CampoFechaNacimiento">Fecha Nacimiento</label>
            <input id="CampoFechaNacimiento" name="CampoFechaNacimiento" type="date">
            <input type="submit" value="Guardar">
        </form>
    </body>
</html>

<?php
if(isset($_POST["CampoDocumento"]))
    //conexión de base de datos
    //("localhost", "usuario", "contraseña", "basedatos")
    $Conexion = new mysqli("localhost", "usuario", "contraseña", "basedatos");
endif

?>