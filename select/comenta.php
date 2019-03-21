<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		*{
			color: white;
			font-size: 16px;
			font-family: "Lato", "sans-serif";
		}

	</style>
	<!-- Fontes -->
	<link href="https://fonts.googleapis.com/css?family=Farsan|Lato:400,700" rel="stylesheet">
</head>
<body>
	<?php 
		include "../admin/conexao.php";
		
		//Realizando o Select, comentarios, ordenado pelo id em ordem descrecente;
		$sql = mysqli_query($conexao,"select * from comentarios order by id desc");
							
		//Varificando se existe registros;
		while ($linha = mysqli_fetch_array($sql)) {

			//Criando as variaveis
			$nome 		= $linha['nome'];
			$email 		= $linha['email'];
			$comentario = $linha['comentario'];

			//Imprimendo na tela, as variaveis e formatação HTML;	
			echo "Nome: " . htmlentities($nome). "<br/>";
			echo "E-Mail: " . htmlentities($email) . "<br/>";
			echo "Coment&aacute;rio: " . htmlentities($comentario) . "<hr/><br/>";
		}		
	?>
</body>
</html>
