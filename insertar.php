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

?>
<form method="POST" action="insertarRegistro.php?Tabla=<?php echo $tabla?>">
<?php
if ($tabla=='alumno') 
{
  echo '<h1>Alta Alumno</h1></br>';
  $SELECT = "SELECT * FROM alumno";
}
else if ($tabla=='maestro') 
{
  echo '<h1>Alta Maestro</h1></br>';
  $SELECT = "SELECT * FROM maestro";
}
else if ($tabla=='asignatura') 
{
  echo '<h1>Alta Asignatura</h1></br>';
  $SELECT = "SELECT * FROM asignatura";
}


  $rs=$db->execute($SELECT);
  
  for ($j=1; $j < $rs->FieldCount()-1; $j++) 
  {
    echo '<label>'.strtoupper($rs->FetchField($j)->name).'      '.'</label><br>
    <input type="text" name="'.$rs->fetchfield($j)->name.'" minlength="1" maxlength="50" size="70"><br><br>';
  }


?>
  
<button type="submit" class="btn btn-success">Insertar</button></a>
<a algin="rhigt"  href="tabla.php?tabla=<?php echo $tabla ?>" ><button type="button"  class="btn btn-primary">Regresar</button></a>
</form>
</div>
</div>
</header>
</body>
</html>