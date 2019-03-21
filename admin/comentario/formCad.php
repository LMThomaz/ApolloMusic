<html>
<head>
	<style type="text/css" media="screen">
		*{
			font-size: 20px;
			color: white;
		}
		iframe{
			border-radius: 20px;
		}
		input{
			font-size: 15px;
			border-radius: 15px;
			margin-top: 7px;
			background-color: #777;
		}
		textarea{
			font-size: 15px;
			border-radius: 15px;
			margin-top: 7px;
			background-color: #777;
		}	
		iframe{
			width: 100%;
			height: 500px;
		}
		textarea:focus, input:focus, select:focus {
		    outline: 0;
		} 
		#linked{
			width: 300px;
			text-indent: 5px;
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
</head>
<body style="font-size: 18px; color: white;">
	<center>
		<form action="salva.php" method="POST" accept-charset="utf-8" autocomplete="off">
				<input type="text" name="nome" placeholder=" Nome" id="linked" required>
				<input type="email" name="email" placeholder=" E-mail" id="linked" required><br>
				<textarea name="comentario" placeholder=" Comentário" cols="80" rows="9" required></textarea><br>	
				<input type="submit" id="btn" value="Salvar">
			</form>
	</center>
	<br>
	<iframe src="seleciona.php"></iframe>	
</body>
</html>