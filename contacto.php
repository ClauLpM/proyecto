<?php
//imprimir en pantalla las variables que recibimos desde el formulario
//print_r($_POST);

$mensaje = '';

//verificar que los datos del formulario se hayan enviado via post
if (isset($_POST['enviar']) && $_POST['enviar'] == 'si') {
	//print_r($_POST);
	//recuperar los datos del formulario
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$asunto = $_POST['asunto'];
	$comentario = $_POST['comentario'];

	if (!$nombre) {
		$mensaje = 'Ingrese su nombre';
	}elseif (!$email) {
		$mensaje = 'El email no es valido';
	}elseif (!$asunto) {
		$mensaje = 'Seleccione un asunto';
	}elseif (!$comentario) {
		$mensaje = 'Ingrese un comentario';
	}else{
		//$m = 'Gracias por escribirnos, pronto nos comunicaremos con usted';
		header('Location: saludo.php?nombre=' . $nombre);
	}

}else{
	$mensaje = 'Los datos no han sido enviados correctamente';
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
			<?php if($mensaje): ?>

				<p class="alert alert-danger"><?php echo $mensaje; ?></p>

			<?php endif;?>

			<form action="" method="post">
				<div class="form-group">
					<label for="nombre">Ingrese su nombre:</label>
					<input type="text" name="nombre" placeholder="Ingrese su nombre completo" class="form-control" value="<?php echo @($nombre); ?>">
				</div>
				<div class="form-group">
					<label>Ingrese email:</label>
					<input type="email" name="email" placeholder="Ingrese su correo electrónico" class="form-control" value="<?php echo @($email); ?>">
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
						<?php echo @($comentario);?>
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