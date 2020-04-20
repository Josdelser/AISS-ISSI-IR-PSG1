<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./css/reset.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet">
	<link rel="stylesheet" href="cabecera/cabecera.css">
    <link rel="stylesheet" href ="navegacion/navegacion.css">
    <link rel="stylesheet" href="registros2.css">
    <link rel="stylesheet" href="footer/footer.css">
	<title>Formulario</title>
</head>
<body>
	<?php
		include('cabecera/cabecera_cancelar.php')
	?>
	<?php
		include('navegacion/navegacion.php')
	?>	
	<div class="container">
		<div class="form__top">
			<h2>Formulario de <span>Registro</span></h2>
		</div>		
		<form class="form__reg" action="">
			<input class="input" type="text" placeholder="&#128100;  Nombre" required autofocus>
            <input class="input" type="text" placeholder="&#128100;  Apellidos" required>
            <input class="input" type="email" placeholder="&#9993;  Email" required>
			<input class="input" type="dni" placeholder="&#9993;  DNI" required>
            <input class="input" type="password" placeholder="&#8962;  Contraseña" required>
            <input class="input" type="password" placeholder="&#8962;  Repita contraseña" required>
        <div class="select">
        

       
                <p>Tipo : </p>
                    
                <input type="radio" name="gender" value="Alumno" checked> Alumno
                <input type="radio" name="gender" value="Profesor"> Profesor
                

       
        </div>

            <div class="btn__form">
            	<input class="btn__submit" type="submit" value="REGISTRAR">
            	<input class="btn__reset" type="reset" value="LIMPIAR">	
            </div>
		</form>
	</div>


	
	<?php
	include('footer/footer.php')
	?>





</body>
</html>