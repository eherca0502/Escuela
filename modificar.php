<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Insertar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
<header class="p-3 bg-secondary text-white">
<div class="container ">
   <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start ">
<?php

include("conexion.php");
$tabla=$_GET['tabla'];
$id=$_GET['id'];

?>
<form method="POST" action="modificarRegistro.php?Tabla=<?php echo $tabla?>">
<?php
if ($tabla=='alumno') 
{
  echo '<h1 align=center>Modificar Alumno</h1></br>';
  $SELECT = "SELECT * FROM alumno WHERE idAlumno=".$id."";;
}
else if ($tabla=='maestro') 
{
  echo '<h1 align=center>Modificar Maestro</h1></br>';
  $SELECT = "SELECT * FROM maestro WHERE idMaestro=".$id."";
}
else if ($tabla=='asignatura') 
{
  echo '<h1 align=center>Modificar Asignatura</h1></br>';
  $SELECT = "SELECT * FROM asignatura WHERE idAsignatura=".$id."";
}

$array=$db->getAll($SELECT);
$db->close();

$db->connect("localhost", "root", "", "prypaginaweb") or die ("Error");
  $rs=$db->execute($SELECT);
  

  for ($i=0; $i < count($array); $i++)
  {   
      
      for ($j=0; $j < $a=count($array[$i])/2; $j++) 
      {
        for ($j=0; $j < $rs->FieldCount(); $j++) 
        {
          echo '<label>'.strtoupper($rs->FetchField($j)->name).'      '.'</label><br>
          <input type="text" value="'.$array[$i][$j].'" name="'.$rs->fetchfield($j)->name.'" minlength="1" maxlength="50" size="70"><br><br>';
        }
      }
  }
?>
  
<button type="submit" class="btn btn-success">Modificar</button></a>
<a algin="rhigt"  href="tabla.php?tabla=<?php echo $tabla ?>" ><button type="button"  class="btn btn-primary">Regresar</button></a>
</form>
</div>
</div>
</header>
</body>
</html>