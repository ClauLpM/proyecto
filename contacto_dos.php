<?php
//funciones que muestran errores de php en tiempo de ejecucion
error_reporting(E_ALL);
ini_set('display_errors', '1');

//requerir de la clase procesa a traves de su archivo
require('procesa.php');
$procesa = new Procesa();

if (isset($_POST['enviar']) && $_POST['enviar'] == 'si') {


	$nombre = strip_tags($_POST['nombre']);
	$email = $_POST['email'];

	if (!$nombre) {
		$mensaje = 'Ingresa tu nombre';
	}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$mensaje = 'El email no es válido';
	}else{
		$procesa->setNombre($nombre);
		$procesa->setEmail($email);

		echo $procesa->getNombre() . '<br>';
		echo $procesa->getEmail();
	}
}



?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Página de Contacto</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<div class="col-md-6 mt-3">
			<h3>Formulario de Contacto</h3>
			<!--Verificar que haya errores-->
			<?php if(isset($mensaje)): ?>
				<p class="alert alert-danger"><?php echo $mensaje; ?></p>
			<?php endif; ?>

			<form action="" method="post">
				<div class="form-group">
					<label for="nombre">Ingrese su nombre:</label>
					<input type="text" name="nombre" placeholder="Ingrese su nombre completo" class="form-control" value="<?php echo @($nombre); ?>">
				</div>
				<div class="form-group">
					<label>Ingrese email:</label>
					<input type="text" name="email" placeholder="Ingrese su correo electrónico" class="form-control" value="<?php echo @($email); ?>">
				</div>
				<div class="form-group">
					<label>Comuna</label>
					<select name="comuna" class="form-control">
						<option value="">Seleccione...</option>

					</select>
				</div>
				<div class="form-group">
					<label>Seleccione un asunto:</label>
					<select name="asunto" class="form-control">
						<option value="">Seleccione...</option>
						<option value="1">Consultas Generales</option>
						<option value="2">Soporte Técnico</option>
						<option value="3">Soporte Técnico</option>
					</select>
				</div>
				<div class="form-group">
					<label>Comentario:</label>
					<textarea name="comentario" class="form-control" rows="4" placeholder="Ingrese su comentario" style="resize: none;">

					</textarea>
				</div>
				<div class="form-group">
					<!--el input enviar servira para verficar que los datos se han enviado via post-->
					<input type="hidden" name="enviar" value="si">
					<button type="submit" class="btn btn-success">Enviar Comentario</button>
				</div>
			</form>
		</div>
	</div>
</body>
</html>