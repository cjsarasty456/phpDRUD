<!DOCTYPE html>
<html lang="es">
    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery-3.3.1.slim.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <title>Registro CRUD</title>
    </head>
    <body>
        <div class="container">
            <form action="#" method="post">
                <div class="row">
                    <div class="col col-xl-6">
                        <label for="CampoDocumento" >Documento</label>
                        <input id="CampoDocumento" name="CampoDocumento" class="form-control" type="text">
                    </div>
                    <div class="col col-xl-6">
                        <label for="CampoNombres">Nombres</label>
                        <input id="CampoNombres" name="CampoNombres" type="text" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col col-xl-6">
                        <label for="CampoApellidos">Apellidos</label>
                        <input id="CampoApellidos" name="CampoApellidos" type="text" class="form-control">
                    </div>
                    <div class="col col-xl-6">
                        <label for="CampoFechaNacimiento">Fecha Nacimiento</label>
                        <input id="CampoFechaNacimiento" name="CampoFechaNacimiento" type="date" class="form-control">
                    </div>
                </div>
                <input type="submit" class="btn btn-success" value="Guardar">
                </form>
        </div>
    </body>
</html>

<?php
    if(isset($_POST["CampoDocumento"]))
    {
        $documento=$_POST["CampoDocumento"];
        $nombres=$_POST["CampoNombres"];
        $apellidos=$_POST["CampoApellidos"];
        $fechaNacimiento=$_POST["CampoFechaNacimiento"];

        $servername="localhost";
        $username="root";
        $password="";
        $database="crud";
        $conn = mysqli_connect($servername, $username, $password, $database);
        if (!$conn) {
            die("Error en la conexión: " . mysqli_connect_error());
        }
        // echo "Conexión exitosa";
        $Sql="insert into crud (documento,nombres,apellidos,fechaNacimiento) values('".$documento."','".$nombres."','".$apellidos."',".$fechaNacimiento.")";
        if($conn->query($Sql)===TRUE){
            echo "Se registró correctamente";
        }
    }

?>