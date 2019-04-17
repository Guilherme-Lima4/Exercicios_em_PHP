<?php header("Content-type: text/html; charset=utf-8");

$num = 0;
$num = $_POST['num'];

for ($i=0;$i<=10;$i++) { 
	$resu = $num * $i;
	echo "<br>$num x $i = $resu";
}

?>