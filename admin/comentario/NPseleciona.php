	<?php

		include "../conexao.php";
		
		//Realizando o Select, comentarios, ordenado pelo id em ordem descrecente;
		$sql = mysqli_query($conexao,"select * from confc order by id desc");
							
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