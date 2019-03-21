<!DOCTYPE html>
<html>
<head>
	<style type="text/css" media="screen">
		h3{
			margin-right: 10px;
			margin-left: 10px;
		}
		h2{
			font-size: 35px;
		}
		img{
			height: 15%;
			width: 15%;
		}
		<link rel="stylesheet" type="text/css" href="estilos/css/util.css">
	</style>
</head>
<body>
	<div class="agrupador">
		<center>
			<div id="conteudo">
				<div id="news">
					<?php
						if(isset($_GET["tophits"])){
							include "../admin/conexao.php";
							$idtop = $_GET["tophits"];
							$hitUnica = mysqli_query($conexao,"select * from tophits where id = '$idtop'");
							$mostrahit = mysqli_fetch_array($hitUnica);
							echo "<a href='".$mostrahit["link"]."' target ='_blank'><img src='../admin/tophits/".$mostrahit["imagem"]."''><br/>";
							echo $mostranhit["musica"]."<br/>";
							echo $mostrahit["cantor"];
						}
					?>		
				</div>
			</div>
		</center>
	</div>
</body>
</html>

