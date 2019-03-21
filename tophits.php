<html lang="pt-BR">
	<head>
		<meta charset="iso-8859-1">
		<title>Apolo Music</title>
		<!-- Fontes -->
		<link href="https://fonts.googleapis.com/css?family=Farsan|Lato:400,700" rel="stylesheet">
		<!-- Custom CSS -->
		<link rel="stylesheet" type="text/css" href="estilos/css/util.css">
		<style type="text/css" media="screen">
			img{
				width: 100px;
				height: 87px;
			}
			.noticia #texti{
				margin-top: -60px;
			}
		</style>
	</head>
	<body style="max-height: 91%;">	
		<div class="agrupador">
			<center>
				<div id="conteudo">
					<div id="news">
						<?php

							include "admin/conexao.php";
							$tophits = mysqli_query($conexao, "select * from tophits order by id desc limit 6");
							while ($listar = mysqli_fetch_array($tophits)){
							
							echo '<div class="noticia">   
							    	<a href='.$listar["link"].' target ="_blank">
							    		<img src="admin/tophits/'.$listar["imagem"].'">
							    			<div id="texti">
								    		<center>'
								    		   .$listar["musica"]
								    		   .'<br/>' 
								    		   .$listar["cantor"]
								    		.'</center>
							    		</div>
									</a>
								  </div>';
						  }
						?>
					</div>
				</div>
			</center>
		</div>
	</body>
</html>