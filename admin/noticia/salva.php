<?php
	include "../conexao.php";

	if (isset($_POST["titulo"])){	  

		  $titulo = $_POST["titulo"];
		  $texto  = $_POST["noticia"];
		  $imagem = $_FILES["imagem"];

		  $nomearquivo = mysqli_query($conexao,"select max(coalesce(id,0)) + 1 as nome from noticias");

		if (mysqli_num_rows($nomearquivo) <= 0){
			  $nomefinal = 'fotos/n1.jpg';	
		  }else{
		    $nomegerado = mysqli_fetch_array($nomearquivo);
		    $nomefinal = 'fotos/n'.$nomegerado["nome"].'.jpg';
		  }

		  if (move_uploaded_file($imagem["tmp_name"],$nomefinal)){
			  
			 	 $salvar = mysqli_query($conexao,"insert into noticias (titulo, texto, imagem) VALUES ('$titulo','$texto', '$nomefinal')");
			  
			 	echo'<script>alert("Noticia registrada com sucesso");</script>';
		 		echo '<meta http-equiv=refresh content="0;URL=formCad.php">';  
		}  
	}
?>