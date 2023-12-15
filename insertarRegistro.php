<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    
</body>
</html>


<?php
$Tabla=$_GET['Tabla'];

if ($Tabla=='alumno') 
{
    $materia= $_POST["Materia"];
    $Nombre= $_POST["Nombre"];
    $ApellidoM= $_POST["Apellido_Materno"];
    $ApellidoP= $_POST["Apellido_Paterno"];
    $Telefono= $_POST["Telefono"];
    $Direccion= $_POST["Direccion"];
    include("Conexion.php");
    $sql="INSERT INTO `alumno` (`idAlumno`, `Materia`, `Nombre`, `Apellido Materno`, `Apellido Paterno`, `Telefono`, `Direccion`, `estatus`) 
    VALUES (NULL, '$materia', '$Nombre', '$ApellidoM', '$ApellidoP', '$Telefono', '$Direccion', '1')";
    
    $resultado =$db->query($sql);  
    if(! $resultado)
    {
        ?>
        <div class="bg-primary text-white" align=center>
        <a1 class="display-3" ><b>OCURRIO UN ERROR. FAVOR DE CHECAR BIEN LOS DATOS</b></a1><br><br>
        <a algin="rhigt"  href="insertar.php?tabla=alumno" ><button type="button"  class="btn btn-success">ACEPTAR</button></a><br><br>
        </div>
    <?php
    }
    else
    {
        ?>
        <div class="bg-primary text-white" align=center>
        <a1 class="display-3" ><b>SE REGISTRO CORRECTAMENTE</b></a1><br><br>
        <a algin="rhigt"  href="tabla.php?tabla=alumno" ><button type="button"  class="btn btn-success">ACEPTAR</button></a><br><br>
        </div>
    <?php
    }
}


if ($Tabla=='maestro') 
{
    $materia= $_POST["Materia"];
    $Nombre= $_POST["Nombre"];
    $ApellidoM= $_POST["Apellido_Materno"];
    $ApellidoP= $_POST["Apellido_Paterno"];
    $Telefono= $_POST["Telefono"];
    $Direccion= $_POST["Direccion"];
    include("Conexion.php");
    $sql="INSERT INTO `maestro` (`id Maestro`, `Materia`, `Nombre`, `Apellido Materno`, `Apellido Paterno`, `Telefono`, `Direccion`, `estatus`) 
    VALUES (NULL, '$materia', '$Nombre', '$ApellidoM', '$ApellidoP', '$Telefono', '$Direccion', '1')";
    
    $resultado =$db->query($sql);  
    if(! $resultado)
    {
        ?>
        <div class="bg-primary text-white" align=center>
        <a1 class="display-3" ><b>OCURRIO UN ERROR. FAVOR DE CHECAR BIEN LOS DATOS</b></a1><br><br>
        <a algin="rhigt"  href="insertar.php?tabla=maestro" ><button type="button"  class="btn btn-success">ACEPTAR</button></a><br><br>
        </div>
    <?php
    }
    else
    {
        ?>
        <div class="bg-primary text-white" align=center>
        <a1 class="display-3" ><b>SE REGISTRO CORRECTAMENTE</b></a1><br><br>
        <a algin="rhigt"  href="tabla.php?tabla=maestro" ><button type="button"  class="btn btn-success">ACEPTAR</button></a><br><br>
        </div>
    <?php
    }
}


if ($Tabla=='asignatura') 
{
    $idMaestro= $_POST["idMaestro"];
    $idAlumno= $_POST["idAlumno"];
    $Nombre= $_POST["Nombre"];

    include("Conexion.php");
    $sql="INSERT INTO `asignatura` (`idAsignatura`, `idMaestro`, `idAlumno`, `Nombre`,`estatus`) 
    VALUES (NULL, '$idMaestro', '$idAlumno', '$Nombre', '1')";
    
    $resultado =$db->query($sql);  
    if(! $resultado)
    {
        ?>
        <div class="bg-primary text-white" align=center>
        <a1 class="display-3" ><b>OCURRIO UN ERROR. FAVOR DE CHECAR BIEN LOS DATOS</b></a1><br><br>
        <a algin="rhigt"  href="insertar.php?tabla=asignatura" ><button type="button"  class="btn btn-success">ACEPTAR</button></a><br><br>
        </div>
    <?php
    }
    else
    {
        ?>
        <div class="bg-primary text-white" align=center>
        <a1 class="display-3" ><b>SE REGISTRO CORRECTAMENTE</b></a1><br><br>
        <a algin="rhigt"  href="tabla.php?tabla=asignatura" ><button type="button"  class="btn btn-success">ACEPTAR</button></a><br><br>
        </div>
    <?php
    }
}
?>