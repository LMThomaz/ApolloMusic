<?php
		//Incluindo a conexão com o banco;
		include "../conexao.php";

		//Verificando de existe algo na variavel $_POST["id"];
		if (isset($_POST["id"])) {

		//Atribuindo o valor de $_POST["id"] para a variavel $deleta;
		$deleta = $_POST["id"];

		//Executando a função delete no bando, pelo id;
		$del = mysqli_query($conexao,"delete from noticias where id = " . $deleta);

		echo'<script>alert("Noticia deletada com sucesso");</script>';
	 	echo '<meta http-equiv=refresh content="0;URL=formDel.php">';
	}
?>