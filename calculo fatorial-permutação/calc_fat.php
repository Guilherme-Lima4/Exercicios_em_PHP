<?php header("Content-type: text/html; charset=utf-8");

$num = 0;
$num = $_POST['num'];

$resu = $num * ($num - 1) * ($num - 2) * ($num - 3); //* ($num - 4) * ($num - 5) * ($num - 6) * ($num - 7) * ($num - 8) * ($num - 9) * ($num - 10);
echo "$resu";

?>