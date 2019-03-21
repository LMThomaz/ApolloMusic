<html lang="pt-BR">
	<head>
		<title>Apollo Music</title>

		<!-- Para inserir o icone -->
		<link rel="icon" href="estilos/icon.gif"/>
		
		<!-- Fontes -->
		<link href="https://fonts.googleapis.com/css?family=Farsan|Lato:400,700" rel="stylesheet">
		<!-- Custom CSS -->
		<link rel="stylesheet" type="text/css" href="estilos/css/estilo.css">
		<link rel="stylesheet" type="text/css" href="estilos/css/player.css">
		
		<script type="text/javascript">

			// Area de onde carrega o player
			function PlayTop (){
				document.getElementById('PlayMusic').innerHTML = '<iframe id="play" src="players/playerTop.html"></iframe>';
				document.getElementById('SelectMusic').style.background="url('gifs/Top.gif')";
			}

			function PlayEletro (){
				document.getElementById('PlayMusic').innerHTML = '<iframe id="play" src="players/playerEletro.html"></iframe>';
				document.getElementById('SelectMusic').style.background="url('gifs/Eletro.gif')"
			}

			function PlayHip (){
				document.getElementById('PlayMusic').innerHTML = '<iframe id="play" src="players/playerHiphop.html"></iframe>';
				document.getElementById('SelectMusic').style.background="url('gifs/Hip.gif')"
			}

			function PlaySertanejo (){
				document.getElementById('PlayMusic').innerHTML = '<iframe id="play" src="players/playerSertanejo.html"></iframe>';
				document.getElementById('SelectMusic').style.background="url('gifs/Ser.gif')"
			}

			function PlayRock (){
				document.getElementById('PlayMusic').innerHTML = '<iframe id="play" src="players/playerRock.html"></iframe>';
				document.getElementById('SelectMusic').style.background="url('gifs/Rock.gif')"
			}
		</script>
	</head>
	<body>

		<!-- Local de carregamento do player -->
		<div id="PlayMusic">

			<!-- Player incial, Top 5 -->
			<iframe id="play" src="players/playerTop.html"></iframe>
		</div>	

		<!-- Local de seleção d' genêro -->
		<div id="SelectMusic"  style="background:url('gifs/Top.gif')">
			<form>
				<center>
					<input type="radio" name="select" value="rdtop" onclick="PlayTop();" checked> Top 5
					<input type="radio" name="select" value="rdeletro" onclick="PlayEletro();"> Eletrônica
					<input type="radio" name="select" value="rdhh" onclick="PlayHip();"> Hip-Hop
					<input type="radio" name="select" value="rdstnj" onclick="PlaySertanejo();"> Sertanejo
					<input type="radio" name="select" value="rbock" onclick="PlayRock();"> Rock			
				</center>
			</form>	
		</div>	

		<div class="agrupador">	
			<header id="header" class="w-full relative">
				<center>
					<img style="height: 180px; margin-top: -15px;" src="estilos/logo.gif">
				</center>		
			</header>
			<br/><br/><br/>
				<!-- Locar para navegação do site -->
			<nav id="navbar" class="w-full relative">
				<ul id="links" class="absolute">
					<li><a href="conteudo.php" 	 target="conteudo" class="transition">Home</a></li>
					<li><a href="tophits.php" 	 target="conteudo" class="transition">Top Hits</a></li>
					<li><a href="sobre.html" 	 target="conteudo" class="transition">Sobre</a></li>
					<li><a href="comentario.php" target="conteudo" class="transition">Comentário</a></li>
					<li><a href="noticia.php" 	 target="conteudo" class="transition">Notícia</a></li>
					<li><a href="login.html"	 target="conteudo" class="transition">Login</a></li>
				</ul>
			</nav>

			<!-- Local destinada a noticias -->
			<div id="conteudo">
				<div id="news" class="f-left h-full pdd">
					<?php
						include "admin/conexao.php";
						$noticias = mysqli_query($conexao, "select * from noticias order by id desc limit 6");
						while ($listar = mysqli_fetch_array($noticias)){
					    	echo '	<div class="noticia">
										<center>
											<a href="select/noticias.php?noticia='.$listar["id"].'" target="conteudo"> '.$listar['titulo'].' </a>
										</center>
									</div>';
					  }
					?>
					<div class="anuncio">
						<center>
							<a href="http://p.pw/baj3SN">Nos Ajude Acessando</a>
						</center>
					</div>
								
				</div>
			
				<!-- Local d' onde abrira outras páginas -->
				<iframe src="conteudo.php" name="conteudo" width="99%" frameborder="0" height="100%" style="max-width: 72.25%;border-radius: 20px;"> </iframe>
				</div>

		</div>
		<br/><br/><br/>
		<!-- Roda-pé do site -->
		<footer id="footer" class="w-full absolute">
			<p class="absolute">
				<a href="ManualTecnico.docx">Manual Técnico</a>
				Apollo Music(C) 2016
				<a href="https://github.com/ApolloMusic/Open/pull/1/files" target="_blank"> Contribua Para O Site</a>
			</p>
		</footer>
	</body>
</html>