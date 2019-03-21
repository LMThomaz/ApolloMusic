<?php
	include "../conexao.php";

  	//Verificando de existe algo na variavel $_POST["id"];
	if (isset($_POST["aprova"])) {

			//Atribuindo o valor de $_POST["id"] para a variavel $deleta;
			$deleta = $_POST["aprova"];

			//Executando a função delete no bando, pelo id;
			$del = mysqli_query($conexao,"delete from confc where id = " . $deleta);

			echo'<script>alert("Comentário apagado com sucesso");</script>';
	 		echo '<meta http-equiv=refresh content="0;URL=formAprova.php">';
		}


?>