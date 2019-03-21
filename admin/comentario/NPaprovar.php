	<?php
		include "../conexao.php";

		if (isset($_POST["aprova"])) {

			//Atribuindo o valor de $_POST["aprova"] para a variavel $aprova;
			$aprova = $_POST["aprova"];

			//Realizando o Select, confc, ordenado pelo id;
			$sql = mysqli_query($conexao,"select * from confc where id = " . $aprova);

			//Varificando se existe registros;
			while ($linha = mysqli_fetch_array($sql)) {

				//Criando as variaveis
				$nome 		= $linha['nome'];
				$email 		= $linha['email'];
				$comentario = $linha['comentario'];

				//Executando a função delete no bando, pelo id;
				$insere = mysqli_query($conexao,"insert into comentarios (nome, email, comentario) VALUES ('$nome', '$email', '$comentario')");
			}

			$del = mysqli_query($conexao,"delete from confc where id = " . $aprova);

			echo'<script>alert("Comentário aprovado com sucesso");</script>';
		 	echo '<meta http-equiv=refresh content="0;URL=formAprova.php">';
		}
	?>
