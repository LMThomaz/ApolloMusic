<html>
<head>
	<style type="text/css" media="screen">
		*{
			font-size: 20px;
			color: white;
		}
		iframe{
			border-radius: 20px;
			width: 100%;
			height: 656px;
		}
		input{
			font-size: 15px;
			border-radius: 15px;
			margin-top: 7px;
			background-color: #444;
			width: 82px;
		}
		input:hover{
			background-color: #666;
			cursor: pointer;
			transition: 0.5s;
			font-size: 17px;
		}
		form{
			padding-top: 10px;
		}
		textarea:focus, input:focus, select:focus {
		    outline: 0;
		} 
		select{
			width: 80px;
			font-size: 17px;
			background-color: #444;
			border-radius: 3px;
		}
		select:hover{
			background-color: #666;
			transition: 0.5s;
			font-size: 19px;
		}
	</style>
</head>
<body style="font-size: 18px; color: white;">
		<!-- Area d' comentários -->
	<center>Informe o ID do coment&aacute;rio que deseja deletar do banco de dados !!</center>

	<?php
		#chama o arquivo de configuração com o banco
		include "../conexao.php";
	
		#seleciona os dados da tabela produto
		$query = mysqli_query($conexao,"select id from comentarios order by id desc");
	?>

	<form method="POST" action="deleta.php">
		<center>
			<select name="id" required>
				<?php while($prod = mysqli_fetch_array($query)) { 
				 		$id = $prod['id'];
				 
				 		echo "<option value='$id'>$id</option>";
				 	} 
				?>
			</select>
			<br/>
			<input type="submit" value="Apagar" />
		</center>		
	</form>
	<br>
	<iframe src="seleciona.php"></iframe>
</body>
</html>