<!DOCTYPE html>
<html>
<head>
<title>Horario</title>
<link rel="stylesheet" href="horario.css">
<link rel="stylesheet" href ="navegacion/navegacion.css">
<link rel="stylesheet" href="footer/footer.css">
<link rel="stylesheet" href="cabecera/cabecera.css">
</head>
<body>
      <?php
        include('cabecera/cabecera_cerrarSesion.php')
      ?>
      <?php
        include('navegacion/navegacionAlumnos.php')
      ?>

      <?php
        include('tablaHorario/tablaHorario.php')
      ?>

<?php
        include('footer/footer.php')
    ?>

</body>
</html>