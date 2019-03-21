<!doctype html>
<html>
<head>
  <meta charset="iso-8859-1">
  <title></title>
  <link rel="stylesheet" href="./css/vendor/normalize.css">
  <link rel="stylesheet" href="css/dist/gallery.prefixed.css">
  <link rel="stylesheet" href="css/dist/gallery.theme.css">
  <link rel="stylesheet" href="css/islide.css">
</head>
<body>
  <div id="fundo" class="gallery autoplay items-5">
    <div id="item-1" class="control-operator"></div>
    <div id="item-2" class="control-operator"></div>
    <div id="item-3" class="control-operator"></div>
    <div id="item-4" class="control-operator"></div>
    <div id="item-5" class="control-operator"></div>

    <?php

  		include "../../admin/conexao.php";
  		$slide = mysqli_query($conexao, "select * from slide order by id desc limit 5");
  		while ($listar = mysqli_fetch_array($slide)){

  			echo '<figure id="fundo" class="item">
                <a href='.$listar["link"].' target ="_blank">
  				  	     <img src="../../admin/slides/'.$listar["imagem"].'"/>
                </a>
  				    </figure>';

  		}
	 ?>

    <div class="controls">
      <a href="#item-1" class="control-button">*</a>
      <a href="#item-2" class="control-button">*</a>
      <a href="#item-3" class="control-button">*</a>
      <a href="#item-4" class="control-button">*</a>
      <a href="#item-5" class="control-button">*</a>
    </div>
  </div>
</body>
</html>