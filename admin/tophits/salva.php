<?php 
	$musica = $_POST["musica"];
	$cantor = $_POST["cantor"];
	$link   = $_POST["link"];
	$imagem = $_FILES["imagem"];

	if (isset($musica)) {
		include "../conexao.php";

		$nomearquivo = mysqli_query($conexao,"select max(coalesce(id,0)) + 1 as nome from tophits");
	 	if (mysqli_num_rows($nomearquivo) <= 0){
		 	$nomefinal = 'fotos/d1.jpg';
	 	}else{
	    	$nomegerado = mysqli_fetch_array($nomearquivo);
	    	$nomefinal = 'fotos/d'.$nomegerado["nome"].'.jpg';
	  	}

	   if (move_uploaded_file($imagem["tmp_name"],$nomefinal)){
		  
			$salvar = mysqli_query($conexao,"insert into tophits (musica, cantor, link, imagem) VALUES ('$musica', '$cantor', '$link', '$nomefinal')");
		  
			echo'<script>alert("Hit registrado com sucesso");</script>';
	 		echo '<meta http-equiv=refresh content="0;URL=formCad.php">';
	  	}  
	}
 ?>