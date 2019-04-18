<?php header("Content-type: text/html; charset=utf-8");

$nome = "";
$nome = $_POST['nome'];
$ida = 0;
$ida = $_POST['ida'];


if($ida >= 18){
	echo "$nome". "\n é maior de 18 e tem: ". $ida. "anos!";
}
else{
	echo "$nome". "\n não é maior de 18 e tem: ". $ida. "anos!";
}	
?>