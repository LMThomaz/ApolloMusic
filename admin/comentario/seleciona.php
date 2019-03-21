<html lang="pt-BR">
<head>
	<style type="text/css" media="screen">
		*{
			font-size: 18px;
			color: white;
		}
	</style>
</head>
<body>
	<?php

		include "../conexao.php";
		
		//Realizando o Select, comentarios, ordenado pelo id em ordem crecente;
		$sql = mysqli_query($conexao,"select * from comentarios order by id desc");
							
		//Varificando se existe registros;
		while ($linha = mysqli_fetch_array($sql)) {

			//Criando as variaveis
			$id 		= $linha['id'];
			$nome 		= $linha['nome'];
			$email 		= $linha['email'];
			$comentario = $linha['comentario'];

			//Imprimendo na tela, as variaveis e formatação HTML;	
			echo "ID: " . $id . "<br/>
				  	Nome: " . htmlentities($nome). "<br/>
				  	E-Mail: " . htmlentities($email) . "<br/>
				  	Coment&aacute;rio: " . htmlentities($comentario) . "<hr/><br/>";
		}

	?>
</body>
</html>
