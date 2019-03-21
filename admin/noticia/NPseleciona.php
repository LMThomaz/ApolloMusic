<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<style type="text/css">
		img{
			height: 200px;
		}
		*{
			font-size: 18px;
			color: white;
		}
	</style>
</head>
<body>
	<?php

		include "../conexao.php";
		
		//Realizando o Select, comentarios, ordenado pelo id em ordem descrecente;
		$sql = mysqli_query($conexao,"select * from confn order by id desc");
					
		//Varificando se existe registros;
		while ($linha = mysqli_fetch_array($sql)) {
		
			//Criando as variaveis
			$id 	= $linha['id'];
			$titulo = $linha['titulo'];
			$texto 	= $linha['texto'];
			$imagem = $linha['imagem'];

			//Imprimendo na tela, as variaveis e formatação HTML;	
			echo "ID: " . $id . "<br>";
			echo "Titulo: ". htmlentities($titulo) . "<br>";
			echo "Noticia: " . htmlentities($texto) . "<br>"; 
			echo "Imagem: <img src=" . $imagem . ">" . "<hr/><br/>";
		}

	?>
</body>
</html>
