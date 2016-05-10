<?php
function conectar1(){
	$user='luis';
	$pass='';
	$server='localhost';
	$db='eventosoftwarebd';
	
	$cn=new mysqli($server,$user,$pass,$db);
	
	return $cn;
}


?>
