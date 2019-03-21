<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Farsan|Lato:400,700" rel="stylesheet">
	<style type="text/css" media="screen">
		*{
			font-size: 20px;
			color: white;
		}
		input{
			margin-top: 10px;
			font-size: 15px;
			border-radius: 15px;
			background-color: #777;
		}
		textarea{
			margin-top: 15px;
			background-color: #777;
			text-indent: 5px;
		}
		textarea:focus, input:focus, select:focus {
		    outline: 0;
		}
		.btn {
		  width: 80px;
		  height: 30px;
		  border: none;
		  font-weight: bold;
		  font-family: "Farsan", "sans-serif";
		  font-size: 20px;
		  background-color: #1E90FF;
		  border-radius: 20px;
		  margin-top: 6px;
		}
		.btn:hover {
		  cursor: pointer;
		  color: white;
		  background-color: black;
		  transition: 0.5s;
		}
		#camp{
			width: 450px;
			text-align: center;
		}
	</style>
</head>
<body>
	<div id="noticialink" class="noticiaprincipal">			
		<link rel="stylesheet" type="text/css" href="estilos/css/etilo.css">
		<center>
			<form method="post" enctype="multipart/form-data" action="salva.php">
				<center>
					<input type="text" maxlength="52" name="titulo" pattern="[a-zA-Z0-9,' ']+" placeholder="Titulo" id="camp" required>
					<br>
					Imagem <input type="file" name="imagem" pattern="[a-zA-Z0-9,' ']+" accept="image/png, image/jpeg" required> 
					<input type="submit" value="Enviar" class="btn">
					<br>
					<textarea name="noticia" pattern="[a-zA-Z0-9,' ']+" style="width:96%;height:680px;font-size:15px; border-radius: 20px" cols="500" rows="200" placeholder=" Noticia" required></textarea>
					<br>
				</center>
			</form>
		</center>
	</div>
	
</body>
</html>