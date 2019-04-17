<?php header("Content-type: text/html; charset=utf-8");

$num = 0;
$num = $_POST['num'];

if ($num % 2 == 0) {
	echo "O número inserido é par!";
}
else {
	echo "O número inserido é impar!";
}


?>