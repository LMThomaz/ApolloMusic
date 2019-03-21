<!DOCTYPE html>
<html>
<head>
	<!-- Fontes -->
	<link href="https://fonts.googleapis.com/css?family=Farsan|Lato:400,700" rel="stylesheet">

	<style type="text/css" media="screen">
		*{
			font-family: "Lato", "sans-serif";
			color: white;
		}
		h3{
			margin-right: 10px;
			margin-left: 10px;
			
		}
		img{
			max-width: 100%;
			max-height: 300px;
		}
		h2{
			font-size: 35px;
		}
	</style>
	
</head>
<body>
	<?php
		if(isset($_GET["noticia"])){
			include "../admin/conexao.php";

			$idnoticia = $_GET["noticia"];
		    $noticiaUnica = mysqli_query($conexao,"select * from noticias where id = '$idnoticia'");
		    $mostranoticia = mysqli_fetch_array($noticiaUnica);

		    echo "<center><h2>".htmlentities($mostranoticia["titulo"])."</h2>";
		    echo "<img src=../admin/noticia/".htmlentities($mostranoticia["imagem"])."></center>";
		    echo "<h3 align='justify'>".htmlentities($mostranoticia["texto"])."</h3>";
		}
	?>
</body>
</html>

