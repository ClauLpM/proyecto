<?php
//declaracion de variables
//el tipo de variable es determinado por el tipo de dato

/*
Comentarios
de varias
lineas
*/
$nombre = 'Juan Perez';
$edad = 30;

echo $nombre;

echo '<br>';
//imprimir el nombre y la edad de Juan
echo 'Hola ' . $nombre . ', la edad ingresada es: ' . $edad . ' años.';

//estructura condicional
if($edad >= 35){
	echo '<br> Usted es mayor de edad';
}else{
	echo '<br> Usted tiene menos de 35 años';
}

//estructura condicional anidado
if ($edad < 18) {
	echo 'Usted no cumple con la edad minima';
}elseif($edad < 30 || $edad > 120){
	echo 'La edad ingresada no es valida';
}else{
	echo 'Gracias por ingresar su edad';
}

//ciclo for
echo '<br>';
echo '<h2>Tabla de Multiplicar</h2>';

$j = 1;
$resultado = 0;

for ($i=1; $i < 11; $i++) {
	echo $i . ' X ' . $j . ' = ' . $i*$j . '<br>';
	$j++;
}

//uso de arrays
$comunas = array('Providencia','Santiago','Ñuñoa','Las Condes');

echo '<br>';
echo '<h3>Ejemplo de foreach</h3>';
foreach ($comunas as $comuna) {
	echo $comuna . '<br>';
}


?>