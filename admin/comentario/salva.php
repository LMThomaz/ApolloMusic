<?php

	$nome       = $_POST["nome"];
	$email      = $_POST["email"];
	$comentario = $_POST["comentario"];

	if (isset($_POST["nome"])){
		include "../conexao.php";
		  
		$salvar = mysqli_query($conexao,"insert into comentarios (nome, email, comentario) VALUES ('$nome', '$email', '$comentario')");

		echo'<script>alert("Obrigado, comentário cadastrado com sucesso!");</script>';
		echo '<meta http-equiv=refresh content="0;URL=formCad.php"	>';

	}
?>
