<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<style type="text/css" media="screen">
		*{
			font-size: 20px;
			color: white;
		}
		iframe{
			border-radius: 20px;
			width: 100%; 
			height: 630px;
		}
		input{
			font-size: 15px;
			border-radius: 15px;
			margin-top: 7px;
			background-color: #777;
		}
		#linked{
			width: 300px;
			text-indent: 5px;
		}
		textarea:focus, input:focus, select:focus {
		    outline: 0;
		}
		#btn{
			font-size: 15px;
			border-radius: 15px;
			margin-top: 7px;
			background-color: #444;
			width: 82px;
		}
		#btn:hover{
			background-color: #666;
			cursor: pointer;
			transition: 0.5s;
			font-size: 17px;
		}
	</style>
	<body>
		<form id="gravar" method="POST" enctype="multipart/form-data" action="salva	.php">
			<center>
				<input type="text" name="musica" placeholder=" Música" required>
				<input type="text" name="cantor" placeholder=" Artista(s)" required><br>
				<input type="text" name="link" placeholder=" Link do Youtube" id="linked" required><br>
				<input type="file" name="imagem" accept="image/png, image/jpeg" required><br>
				<input type="submit" id="btn" value="Salvar">
			</center>
			
		</form>
		<br>
		<iframe src="seleciona.php"></iframe>	
	</body>
</html>