<?php
  include_once("conexao.php");
  $login = $_POST["nome"];
  $senha = $_POST["senha"]; 
  
  $verificaLogin = mysqli_query($conexao,"select * from login where login = '$login' and senha = '$senha'");
  if (mysqli_num_rows($verificaLogin) > 0){
		header("Location: index.html");		  
  }else{
  		echo'<script>alert("Login ou Senha incorreto")</script>';
		echo'<script>window.close();</script>';  
  }
?>