<?php header("Content-type: text/html; charset=utf-8");

$num = 0;
$num = $_POST['num'];
$num2 = 0;
$num2 = $_POST['num2'];
$num3 = 0;
$num3 = $_POST['num3'];

$media = ($num + $num2 + $num3) / 3;

$array = array($num, $num2, $num3);

if ($media >= 6) {
	echo "Aluno aprovado com a média final: $media <br>";
}
else {
	echo "Aluno reprovado com a média final: $media <br>";
}

echo "Primeira nota = $array[0]";
echo "<br>";
echo "Segunda nota = $array[1]";
echo "<br>";
echo "Terceira nota = $array[2]";

