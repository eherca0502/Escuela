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
include("conexion.php");
$id=$_GET['id'];
$tabla=$_GET['tabla'];
$columna=$_GET['columna'];

echo "DELETE FROM ".$tabla." WHERE ".$columna."=".$id."";
$db->execute("DELETE FROM ".$tabla." WHERE ".$columna."=".$id."");
$resultado=$db->affected_rows();


if(! $resultado)
{
    echo "OCURRIO UN ERROR";?>
    <a algin="rhigt"  href="tabla.php?tabla=<?php echo $tabla?>" ><button type="button"  class="btn btn-success">ACEPTAR</button></a><?php
}
else
{
    ?>
    <div class="bg-primary text-white" align=center>
    <a1 class="display-3" ><b>SE ELIMINO CORRECTAMENTE</b></a1><br><br>
    <a algin="rhigt"  href="tabla.php?tabla=<?php echo $tabla?>" ><button type="button"  class="btn btn-success">ACEPTAR</button></a><br><br>
    </div>
<?php
}
?>