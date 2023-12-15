<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escuela</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
<header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="tabla.php?tabla=alumno" class="nav-link px-2 text-white">Alumnos</a></li>
          <li><a href="tabla.php?tabla=maestro" class="nav-link px-2 text-white">Maestros</a></li>
          <li><a href="tabla.php?tabla=asignatura" class="nav-link px-2 text-white">Asignatura</a></li>
        </ul>

      </div>
    </div>
  </header>


<div class="bg-primary text-white" align=center>
<h1 class="display-3 " align="center"><br><b> INSTITUTO TECNOLOGICO SUPERIOR DE MONCLOVA </b></h1><br><br>
</div>
<div class="p-3 mb-2 bg-info text-white" align=center>
<h2><br><a href="tabla.php?tabla=alumno"><button type="button" style="margin:auto ;width: 350px;" class="btn btn-primary btn-lg">Alumnos</button></a></h2><br><br>
<h2><a href="tabla.php?tabla=maestro"><button type="button" style="margin:auto ;width: 350px;" class="btn btn-primary btn-lg">Maestros</button></a></h2><br><br>
<h2><a href="tabla.php?tabla=asignatura"><button type="button" style="margin:auto ;width: 350px;" class="btn btn-primary btn-lg">Asignatura</button></a></h2><br><br>
</div>
</body>
</html>