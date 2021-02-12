<?php 

$a = $_POST['a'];
$b = $_POST['b'];
$mensaje = "La Hipotenusa es: ";
$Raiz;
$Cuadrado;

$Cuadrado = pow($a, 2) + pow($b, 2);
$Raiz = sqrt($Cuadrado);

echo"$mensaje $Raiz";

echo"<a href='datos.html'>Regresar</a>";


?>