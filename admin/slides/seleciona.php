<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<style type="text/css" media="screen">
		img{
			height: 150px;
		}
	</style>
</head>
<body>
	<?php 
	//Incluindo a conexão com o banco;
	include "../conexao.php";

	//Realizando o Select, comentarios, ordenado pelo id em ordem descrecente;
	$sql = mysqli_query($conexao,"select * from slide order by id desc");
							
	//Varificando se existe registros;
	while ($linha = mysqli_fetch_array($sql)) {

	//Criando as variaveis
	$id 	= $linha['id'];
	$link   = $linha['link'];
	$imagem = $linha['imagem'];

	//Imprimendo na tela, as variaveis e formatação HTML;	
	echo "ID: " 			. $id 	 . "<br/>";
	echo "Link: " 		    . $link  . "<br/>";
	echo "Imagem: <img src=". $imagem.">" . "<hr/><br/>";
	}		
?>
</body>
</html>

