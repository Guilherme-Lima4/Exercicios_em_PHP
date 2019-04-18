<?php header("Content-type: text/html; charset=utf-8");

$num = 0;
$num2 = 0;
$operacao = "";

$num = $_POST['num'];
$num2 = $_POST['num2'];
$operacao = $_POST['opr'];

#COM IF E ELSE

/*if ($operacao == "+") {
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
else if ($operacao == "%") {
	$mod = $num % $num2;
	echo "Resultado da modulação: $mod";
}
*/

#COM SWITCH CASE

switch ($operacao) {
	case "+":
		$soma = $num + $num2;
		echo "Resultado da soma: $soma";
		break;
	
	case "-":
		$sub = $num - $num2;
		echo "Resultado da subtração: $sub";
		break;
	
	case "*":
		$mult = $num * $num2;
		echo "Resultado da multiplicação: $mult";
		break;

	case "/":
		$div = $num / $num2;
		echo "Resultado da divisão: $div";
		break;	

	case "%":
		$mod = $num % $num2;
		echo "Resultado da modulação: $mod";
		break;		

	default:
		echo "Você não inseriu um sinal válido para a procedência da operação!";
		break;
}











?>







