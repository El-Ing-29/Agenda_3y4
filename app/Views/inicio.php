<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>inicio</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('bootstrap/bootstrap.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('datatable/dataTables.bootstrap4.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/stilos.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/font-awesome.min.css">

	<script src="<?php echo base_url('js/jquery-3.5.1.min.js') ?>"></script>
	<script src="<?php echo base_url('bootstrap/popper.min.js') ?>"></script>
	<script src="<?php echo base_url('bootstrap/bootstrap.min.js') ?>"></script>
	<script src="<?php echo base_url('datatable/jquery.dataTables.min.js') ?>"></script>
	<script src="<?php echo base_url('datatable/dataTables.bootstrap4.min.js') ?>"></script>
</head>
<body background="<?php echo base_url(); ?>/img/bar.jpg">

	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="#">Agenda</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url('/Categorias') ?>">Categoria</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url('/Contactos') ?>">Contactos</a>
					</li>
				</ul>
			</div>
		</nav>
		<hr>
		<div class="row">
			<div>
				<center>
					<img src="<?php echo base_url(); ?>/img/yo (1).jpg" width="280" height="335">
				</center>
			</div>
			<div class="transpa">
				<center>
					<h1>Datos del Admin</h1>
				</center>
				<div class="col-sm-6">
				<label for="concepto">Nombre:</label><br>
				<label for="concepto">Ruben Enrique Macias Oyola</label><br>
				<label for="monto">Carrera:</label><br>
				<label for="concepto">Ing. Sistemas Computacionales</label><br>
				<label for="fecha">Especialidad:</label><br>
				<label for="concepto">Servicios WEB</label>
			</div>
		</div>
	</div>
	</div>
</body>
</html>