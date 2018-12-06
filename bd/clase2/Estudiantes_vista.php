<?php
	require_once 'Estudiantes_modelo.php';
	$estudiante = new Estudiantes_modelo();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
</head>
<body>

	<h1>CRUD de Estudiantes</h1>

	<?php  var_dump(PDO::getAvailableDrivers()); ?>

	<h3>C: Insertar</h3>
	<?php

		/*$alumno = [
			'nombre' => 'Yesi',
			'paterno' => 'Days',
			'materno' => 'B',
			'email' => 'silvercorp@gmail.com'
		];
		*/

	?>

	<h3>R: Leer/Consultar</h3>
	<?php
		
	?>

	<h3>U: Actualizar</h3>

	<?php

		

	?>

	<h3>D: Eliminar</h3>

	<?php

		

	?>




</body>
</html>