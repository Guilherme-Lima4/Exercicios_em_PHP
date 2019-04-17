<?php header("Content-type: text/html; charset=utf-8");

$num = 0;
$num = $_POST['num'];

if ($num > 0)
	echo "Valor positivo: $num";

else if ($num < 0)
	echo "Valor negativo: $num";

else
	echo "Igual a zero";



?>