<?php header("Content-type: text/html; charset=utf-8");

$num = 0;
$num = $_POST['num'];
$num2 = 0;
$num2 = $_POST['num2'];

if ($num < $num2) {
	echo "|B| maior que |A|";
}
else {
	echo "|A| maior que |B|";
}


?>