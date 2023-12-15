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
    $idAlumno=$_POST["idAlumno"];
    $materia= $_POST["Materia"];
    $Nombre= $_POST["Nombre"];
    $ApellidoM= $_POST["Apellido_Materno"];
    $ApellidoP= $_POST["Apellido_Paterno"];
    $Telefono= $_POST["Telefono"];
    $Direccion= $_POST["Direccion"];
    $estatus=$_POST["estatus"];
    include("Conexion.php");

    $sql="UPDATE `alumno` SET `Materia`='$materia', `Nombre`='$Nombre', `Apellido Materno`='$ApellidoM', `Apellido Paterno`='$ApellidoP', `Telefono`='$Telefono', `Direccion`='$Direccion', `estatus`='$estatus'
    WHERE `alumno`.`idAlumno`=$idAlumno;";
    
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
        <a1 class="display-3" ><b>SE MODIFICO CORRECTAMENTE</b></a1><br><br>
        <a algin="rhigt"  href="tabla.php?tabla=alumno" ><button type="button"  class="btn btn-success">ACEPTAR</button></a><br><br>
        </div>
    <?php
    }
}


if ($Tabla=='maestro') 
{
    $idMaestro= $_POST["idMaestro"];
    $materia= $_POST["Materia"];
    $Nombre= $_POST["Nombre"];
    $ApellidoM= $_POST["Apellido_Materno"];
    $ApellidoP= $_POST["Apellido_Paterno"];
    $Telefono= $_POST["Telefono"];
    $Direccion= $_POST["Direccion"];
    $estatus= $_POST["estatus"];
    include("Conexion.php");
    $sql="UPDATE `maestro` SET `Materia`='$materia', `Nombre`='$Nombre', `Apellido Materno`='$ApellidoM', `Apellido Paterno`='$ApellidoP', `Telefono`='$Telefono', `Direccion`='$Direccion', `estatus`='$estatus'
    WHERE `maestro`.`idMaestro`=$idMaestro;";
    
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
        <a1 class="display-3" ><b>SE MODIFICO CORRECTAMENTE</b></a1><br><br>
        <a algin="rhigt"  href="tabla.php?tabla=maestro" ><button type="button"  class="btn btn-success">ACEPTAR</button></a><br><br>
        </div>
    <?php
    }
}


if ($Tabla=='asignatura') 
{
    $idAsignatura= $_POST["idAsignatura"];
    $idMaestro= $_POST["idMaestro"];
    $idAlumno= $_POST["idAlumno"];
    $Nombre= $_POST["Nombre"];
    $estatus= $_POST["estatus"];

    include("Conexion.php");
    $sql="UPDATE `asignatura` SET `idMaestro`='$idMaestro', `idAlumno`='$idAlumno', `Nombre`='$Nombre',`estatus` = b'$estatus'
    WHERE `asignatura`.`idAsignatura`=$idAsignatura;";
    
    $resultado =$db->query($sql);  
    if(! $resultado)
    {
        ?>
        <div class="bg-primary text-white" align=center>
        <a1 class="display-3" ><b>OCURRIO UN ERROR. FAVOR DE CHECAR BIEN LOS DATOS</b></a1><br><br>
        <a algin="rhigt"  href="tabla.php?tabla=asignatura" ><button type="button"  class="btn btn-success">ACEPTAR</button></a><br><br>
        </div>
    <?php
    }
    else
    {
        ?>
        <div class="bg-primary text-white" align=center>
        <a1 class="display-3" ><b>SE MODIFICO CORRECTAMENTE</b></a1><br><br>
        <a algin="rhigt"  href="tabla.php?tabla=asignatura" ><button type="button"  class="btn btn-success">ACEPTAR</button></a><br><br>
        </div>
    <?php
    }
}
?>