<?php
	include "../conexao.php";

	if (isset($_POST["aprova"])) {

		//Atribuindo o valor de $_POST["aprova"] para a variavel $aprova;
		$aprova = $_POST["aprova"];

		//Realizando o Select, confn, ordenado pelo id;
		$sql = mysqli_query($conexao,"select * from confn where id = " . $aprova);

		//Varificando se existe registros;
		while ($linha = mysqli_fetch_array($sql)) {

			//Criando as variaveis
			$titulo = $linha['titulo'];
			$texto 	= $linha['texto'];
			$imagem = $linha['imagem'];

			//Executando a função insert no bando, pelo id;
			$insere = mysqli_query($conexao,"insert into noticias (titulo, texto, imagem) VALUES ('$titulo', '$texto', '$imagem')");
		}

		//Executando a função delete no bando, pelo id;
		$del = mysqli_query($conexao,"delete from confn where id = " . $aprova);

		echo'<script>alert("Noticia o aprovada com sucesso");</script>';
	 	echo '<meta http-equiv=refresh content="0;URL=formAprova.php">';
	}
?>