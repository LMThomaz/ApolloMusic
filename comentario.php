<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>Apolo Music</title>
	<!-- Fontes -->
	<link href="https://fonts.googleapis.com/css?family=Farsan|Lato:400,700" rel="stylesheet">
	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="estilos/css/Sobre.css">
	<style type="text/css" media="screen">
		input{
			background-color: #777;
		}
		textarea{
			background-color: #777;	
		}
	</style>
</head>
<body>
	<?php

	  if (isset($_POST["nome"])){ 

	  	$nome       = $_POST["nome"];
	 	$email      = $_POST["email"];
	  	$comentario = $_POST["comentario"];
	  		
		include "admin/conexao.php";
		  
		$salvar = mysqli_query($conexao,"insert into confc (nome, email, comentario) VALUES ('$nome', '$email', '$comentario')");

		echo'<script>alert("Obrigado, comentário enviado com sucesso!");</script>';
		echo '<meta http-equiv=refresh content="0;URL=comentario.php">';  

	  }
	?>
	<div class="agrupador">
        <br/>
		<div id="form">				
			<div id="group">
				<h1>Deixe seu Comentário</h1>
				<form method="POST" autocomplete="off">
					<label for="nome">Nome</label>
					<input type="text" name="nome" class="campo-texto" maxlength="30" placeholder="Nome" style="color: white;" required pattern="[a-zA-Z0-9,' ']+">	
					<label for="email">E-mail</label>
					<input type="email" name="email" class="campo-texto" maxlength="30" placeholder="E-Mail" style="color: white;" required>
					<label for="comentario">Comentário</label>
					<textarea name="comentario" cols="80" rows="9" placeholder="Comentário" style="color: white;" required pattern="[a-zA-Z0-9,' ']+"></textarea>
					<label>Obs: Caso houver acentuação, seu comentário não será aprovado (Formato Exigido)</label>
					<input type="submit" value="Enviar" class="btn transition">

				</form>
			</div>
		</div>
	</div>
</body>
</html>