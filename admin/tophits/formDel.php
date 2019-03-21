<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<style type="text/css" media="screen">
		*{
			font-size: 20px;
			color: white;
		}
		form{
			padding-top: 15px;
		}
		iframe{
			border-radius: 20px;
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
		textarea:focus, input:focus, select:focus {
		    outline: 0;
		}
		#linked{
			width: 300px;
			text-indent: 5px;
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
<body>
	<center>Informe o ID do TopHits que deseja deletar do banco de dados !!</center>
	<?php
		#chama o arquivo de configuração com o banco
		include "../conexao.php";

		#seleciona os dados da tabela produto
		$query = mysqli_query($conexao,"select id from tophits order by id desc");
	?>

	<form method="POST" action="deleta.php" enctype="multipart/form-data">
		<center>
			<select name="id" required>
				<?php while($prod = mysqli_fetch_array($query)) { 
				 		$id = $prod['id'];
				 
				 		echo "<option value='$id'>$id</option>";
				 	} 
				?>
			</select>
			<br/>
			<input type="submit" value="Deletar">
		</center>
	</form>
	<br/>
	<iframe src="seleciona.php" style="width: 100%; height: 656px;"></iframe>
</body>
</html>