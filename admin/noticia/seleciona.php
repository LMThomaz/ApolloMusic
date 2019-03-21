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

			$lista = mysqli_query($conexao,"select * from noticias order by id desc");
			while ($noticias = mysqli_fetch_array($lista)){

			 	$id     = $noticias['id'];
			 	$titulo = $noticias['titulo'];
			 	$texto  = $noticias['texto'];
			 	$imagem = $noticias['imagem'];

				  // Aqui é a listagem dos dados do Banco de Dados altere de acordo com a sua necessidade
				echo "ID: " . $id . "<br>";
				echo "Titulo: ". $titulo . "<br>";
				echo "Noticia: " . $texto . "<br>"; 
				echo "Imagem: <img src=" . $imagem . ">" . "<hr/><br/>";
			 }
		?>
	</body>
</html>