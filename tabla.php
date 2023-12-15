<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="tabla.css">
</head>
<body>
<div class=" p-3 mb-2 bg-secondary text-white">

<header>
   
<h1 class="display-4 " align="center">TECNOLOGICO SUPERIOR DE MONCLOVA</h1>
<?php

    include("conexion.php");
    $tabla = $_GET['tabla'];
    echo '<br><h1 class="display-3" align="center">'.$tabla.'</h1>';

    if ($tabla=='alumno') 
    {
        $SELECT = "SELECT * FROM alumno";
        $nombreTabla="alumno";
    }
    else if ($tabla=='maestro') 
    {
        $SELECT = "SELECT * FROM maestro";
        $nombreTabla="maestro";
    }
    else if ($tabla=='asignatura') 
    {
        $SELECT = "SELECT * FROM asignatura";
        $nombreTabla="asignatura";
    }
?>

<div class="mi-auto" align="right" >
    
    <a algin="rhigt" href="insertar.php?tabla=<?php echo $nombreTabla ?>"><button type="button" class="btn btn-success">Insertar</button></a>
    <a algin="rhigt"  href="index.php" ><button type="button"  class="btn btn-primary">Regresar</button></a>
</div>
</header>
<?php

$array=$db->getAll($SELECT);
$db->close();

$db->connect("localhost", "root", "", "prypaginaweb") or die ("Error");

$rs=$db->execute($SELECT);
$db->close();

echo '<table class="table table-success table-striped >">
<thead class="table-secundary"';
echo '<tr>';
    for ($j=0; $j < $rs->FieldCount(); $j++) 
    {
      echo '<th>'.strtoupper($rs->FetchField($j)->name).'</th>';
    }
    echo '<th><th>ACCIONES</th></th>';
    echo '</tr>';

    for ($i=0; $i < count($array); $i++)
    {   
        echo '<tr>';
        for ($j=0; $j < $a=count($array[$i])/2; $j++) 
        {
            echo '<td>'.$array[$i][$j].'</td>';
        }
        ?>
        <td><a href="modificar.php?tabla=<?php echo $nombreTabla?>&id=<?php echo ($array[$i][0])?>"><button type="button" class="btn btn-secondary">Modificar</button></td>
        <td><a algin="rhigt"  href="delete.php?tabla=<?php echo $nombreTabla?>&id=<?php echo ($array[$i][0])?>&columna=<?php echo ($rs->FetchField(0)->name)?>" ><button type="button"  class="btn btn-danger">Eliminar</button></a>
<?php

        echo '</tr>';
    }?>
</thead>
</table>
</body>
</html>