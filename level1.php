<?php
include 'config.php';

if( isset($_GET['sair']) ){
	setcookie("login", " ", time()-360);
	setcookie("senha", " ", time()-360);
	unset($_COOKIE['login']);
	unset($_COOKIE['senha']);
}

@$login = ( isset($_COOKIE['login']) )? $_COOKIE['login'] : $_POST['login'];
@$senha = ( isset($_COOKIE['senha']) )? $_COOKIE['senha'] : $_POST['senha'];

echo "--------".$login."--".$senha."--------";

$sql = ("select * from usuarios where login='$login' and senha='$senha'; ");



$query = mysql_query($sql);

while($row = mysql_fetch_array($query)){
	$admin = $row['admin'];
}

if(mysql_num_rows($query) == 1 && $admin == 1) {
    include 'header.php';
    echo "<h1 style='color: green;'>Bem vindo a página inicial</h1> 
    <br> <b>Senha1 = <span style='color:red;'> 'Aldebarã'</span></b> <Br>
    <img src='img/safe.jpg' />";
	setcookie("login", $login, time()+(60*15));
	setcookie("senha", $senha, time()+(60*15));
} else {

// echo $sql;

 die('Usuário não tem permissão para visualizar essa página.<br>
    	P.S. O usuário administrador é o penúltimo registro.
		<meta http-equiv="refresh" content="4; url=index.php">');
}










