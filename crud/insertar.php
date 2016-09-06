<?php
	include('inc/cabecera.php');
	include('inc/menu.php');
	include('inc/conexion.php')

?>

<div class="container">

	<div class="row">
		<div class="col-md-8">
			<h1>Registrar Nueva persona</h1>
			<form class="form-horizontal" method="post" action="nuevo_recibe.php">
				<div class="form-group">
					<label for="txt-paterno" class="col-md-2 control-label">Paterno</label>
					<div class="col-md-2">
						<input type="text" class="form-control" name="txt-paterno" id="txt-paterno" placeholder="Apellido Paterno">
					</div>
				</div>
				<div class="form-group">
					<label for="txt-materno" class="col-md-2 control-label">Materno</label>
					<div class="col-md-2">
						<input type="text" class="form-control" name="txt-materno" id="txt-materno" placeholder="Apellido Materno">
					</div>
				</div>
				<div class="form-group">
					<label for="txt-materno" class="col-md-2 control-label">Nombres</label>
					<div class="col-md-2">
						<input type="text" class="form-control" name="txt-nombres" id="txt-nombres" placeholder="Nombres">
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-2 col-md-offset-2">
						<input type="submit" class="btn" name="submit-nuevo" value="Guardar">
					</div>
				</div>
			</form>
		</div>
		<div class="col-md-4">
			<div class="alert alert-success">
				<strong>Bienvenidos</strong> al CRUD Personas.
			</div>
		</div>
	</div>

</div>

<?php
	include('inc/scripts.php');
	include('inc/pie.php');
?>