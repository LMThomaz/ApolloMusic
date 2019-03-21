<?php 
	$link   = $_POST["link"];
	$imagem = $_FILES["imagem"];

	if (isset($link)) {
		include "../conexao.php";

		$nomearquivo = mysqli_query($conexao,"select max(coalesce(id,0)) + 1 as nome from slide");
	 	if (mysqli_num_rows($nomearquivo) <= 0){
		 	$nomefinal = 'fotos/1.jpg';
	 	}else{
	    	$nomegerado = mysqli_fetch_array($nomearquivo);
	    	$nomefinal = 'fotos/'.$nomegerado["nome"].'.jpg';
	  	}

	   if (move_uploaded_file($imagem["tmp_name"],$nomefinal)){
		  
			$salvar = mysqli_query($conexao,"insert into slide (link, imagem) VALUES ('$link', '$nomefinal')");
		  
			echo'<script>alert("Slide registrado com sucesso");</script>';
	 		echo '<meta http-equiv=refresh content="0;URL=formCad.php">';
	  	}  
	}
 ?>