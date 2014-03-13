<?php
if(!isset($_COOKIE['login']))
	echo "<h3>Acesso não autorizado!</h3>
		\n<meta http-equiv=\"refresh\" content=\"3; url=../\">
		\n<!-- Se fosse você não faria isso de novo! -->";
else {
	include '../config.php';
	include '../header.php';

	echo "<h1 style='color: green;'>Bem vindo a página Administrativa</h1> 
		<br> <b>Senha3 = <span style='color:red;'> 'Canopus'</span></b> <Br>";
}

