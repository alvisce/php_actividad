<?php
// opcache_reset();
$datos = array(
	'nombre' => 'C&eacute;sar', 
	'apellido' => 'Alvis', 
	'edad' => '50', 
	'hobbie' => 'Ninguno', 
	'editor_txt' => 'Vim o similar', 
	'os' => 'Windows 10'
);
?>
<html>
<head>
	<title>Modulo PHP - Unidad 1</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
</head>
<body class="container bg-secondary">
	<header class="container text-dark bg-light text-center">
		<span class="fs-1">Informaci&oacute;n Personal</span>
	</header>
	<main class="container bg-light p-2">
		<ul class="list-group rounded-0">
			<li class="list-group-item">
				Nombre: <?=$datos['nombre']?>
			</li>
			<li class="list-group-item">
				Apellido: <?=$datos['apellido']?>
			</li>
			<li class="list-group-item">
				Edad: <?=$datos['edad']?>	
			</li>
			<li class="list-group-item">
				Hobbie: <?=$datos['hobbie']?>
			</li>
			<li class="list-group-item">
				Editor de c&oacute;digo preferido: <?=$datos['editor_txt']?>
			</li>
			<li class="list-group-item">
				Sistema operativo: <?=$datos['os']?>
			</li>
		</ul>
	</main>
	<footer class="container d-flex flex-column flex-sm-row alert-dark my-2 py-2">
		<span class="mx-auto">PHP FullStack</span>
		<span class="fw-bold mx-auto"><?=$datos['nombre'] . ' ' . $datos['apellido']?></span>
		<span class="mx-auto">Comisi&oacute;n 2162</span>
	</footer>
</body>
</html>