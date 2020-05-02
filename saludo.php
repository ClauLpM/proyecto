<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Página de Contacto</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<title>Saludo</title>
</head>
<body>
	<div class="container">
		<div class="col-md-12">
			<p class="text-info mt">Estimado(a) <?php echo $_GET['nombre']; ?>, gracias popr escribirnos. Pronto nos comunicaremos con usted.</p>
		</div>
	</div>

</body>
</html>