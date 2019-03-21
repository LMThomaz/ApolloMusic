<?php
	# Informa qual o conjunto de caracteres será usado.
	header('Content-Type: text/html; charset=utf-8');

	error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
	$host = "localhost";
  	$usuariobd = "u545095495_tcc";
  	$senhabd = "#123456789#";
  	$conexao = mysqli_connect($host,$usuariobd,$senhabd) or die (mysqli_error());
  	$bd = mysqli_select_db($conexao,"u545095495_apoll");
?>