<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >

<?php
if(!isset($_COOKIE['login']))
	echo "<h3>Acesso não autorizado!</h3>
			\n<meta http-equiv=\"refresh\" content=\"3; url=index.php\">
			\n<!-- Se fosse você não faria isso de novo! -->";
else {
	include 'config.php';
	include 'header.php';
	echo "<h1 style='color: green;'>Cadastrar novo usuário</h1> \n\t<br>";

	ini_set( "display_errors", true );
	ini_set('track_errors', '1');

	$id = $_GET['id'];
	$sql = ("select * from usuarios where id=$id ");

	$query = mysql_query($sql);

	if(!$query){
		$message  = '<b>Consulta inválida:</b><br>' . mysql_error() . '<br><br>';
		$message .= '<b>Select:</b><br>' . $sql . '<br><br>';
		$message .= "<b>Senha6 = <span style='color:red;'> 'Betelgeuse'</span></b>";
		die($message);
	}

	?>
	<div class='buttons'>
		<button type="button" name="saveChanges"><img src="img/tick.png" alt="" /> Cadastrar novo Usuário</button>
		<a href="#" style="text-decoration: none;">
		<button id="buttonCancel" type="button" class="positive"><img src="img/exclude.png" alt="" border="0" /> Cancelar</button>
		</a>
	</div>
<?php } ?>
