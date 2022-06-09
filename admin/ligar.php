<?php

$hostname  = "localhost";
$bancodedados = "portal";
$usuario = "root";
$senha = "";
$table_logins = "logins";
$table_dados= "dados";
$table_noticias= "noticias";


$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
if ($mysqli->connect_errno){
	echo "falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
} 

//else
//echo "conectado!";