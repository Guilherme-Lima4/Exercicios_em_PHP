<?php header("Content-type: text/html; charset=utf-8");

$num = 0;
$num2 = 0;
$operacao = "";

$num = $_POST['num'];
$num2 = $_POST['num2'];
$operacao = $_POST['opr'];

if ($operacao == "+") {
	$soma = $num + $num2;
	echo "Resultado da soma: $soma";
}
else if ($operacao == "-") {
	$sub = $num - $num2;
	echo "Resultado da subtração: $sub";
}
else if ($operacao == "*") {
	$mult = $num * $num2;
	echo "Resultado da multiplicação: $mult";
}
else if ($operacao == "/") {
	$div = $num / $num2;
	echo "Resultado da divisão: $div";
}

?>