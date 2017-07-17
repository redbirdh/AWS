<?php
$query = $_SERVER['QUERY_STRING'];
// echo "<h1>".$query."</h1>";

if(preg_match("/\A[0-9\(\)\+\-\*\/]+\z/", $query)){
	$kekka = eval("return {$query};");
	echo $kekka;
}else{
	echo "ERROR";
}
?>
